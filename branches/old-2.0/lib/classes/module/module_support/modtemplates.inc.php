<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2008 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

/**
 * Methods for modules to do template related functions
 *
 * @since		1.0
 * @package		CMS
 */

function cms_module_ListTemplates(&$modinstance, $modulename = '')
{
	global $gCms;

	$db =& $gCms->GetDb();
	$config =& $gCms->GetConfig();

	$retresult = array();

	$query = 'SELECT * from '.cms_db_prefix().'module_templates WHERE module_name = ? ORDER BY template_name ASC';
	$result =& $db->Execute($query, array($modulename != ''?$modulename:$modinstance->get_name()));

	while (isset($result) && !$result->EOF)
	{
		$retresult[] = $result->fields['template_name'];
		$result->MoveNext();
	}

	return $retresult;
}

/**
 * Returns a database saved template.  This should be used for admin functions only, as it doesn't
 * follow any smarty caching rules.
 */
function cms_module_GetTemplate(&$modinstance, $tpl_name, $modulename = '')
{
	global $gCms;

	$db =& $gCms->GetDb();
	$config =& $gCms->GetConfig();

	$query = 'SELECT * from '.cms_db_prefix().'module_templates WHERE module_name = ? and template_name = ?';
	$result = $db->Execute($query, array($modulename != ''?$modulename:$modinstance->get_name(), $tpl_name));

	if ($result && $result->RecordCount() > 0)
	{
		$row = $result->FetchRow();
		return $row['content'];
	}

	return '';
}

/**
 * Returns contents of the template that resides in modules/ModuleName/templates/{template_name}.tpl
 * Code adapted from the Guestbook module
 */
function cms_module_GetTemplateFromFile(&$modinstance, $template_name)
{
	$ok = (strpos($tpl_name, '..') === false);
	if (!$ok) return;

	global $gCms;
	$config = &$gCms->GetConfig();
	$tpl_base  = $config['root_path'].DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR;
	$tpl_base .= $modinstance->get_name().DIRECTORY_SEPARATOR.'templates';
	$template = $tpl_base.DIRECTORY_SEPARATOR.$template_name.'.tpl';
	if (is_file($template)) {
		return file_get_contents($template);
	}
	else
	{
		return lang('errorinsertingtemplate');
	}
}

function cms_module_SetTemplate(&$modinstance, $tpl_name, $content, $modulename = '')
{
	global $gCms;
	$db =& $gCms->GetDB();

	$query = 'SELECT module_name FROM '.cms_db_prefix().'module_templates WHERE module_name = ? and template_name = ?';
	$result = $db->Execute($query, array($modulename != ''?$modulename:$modinstance->get_name(), $tpl_name));

	$time = $db->DBTimeStamp(time());
	if ($result && $result->RecordCount() < 1)
	{
		$query = 'INSERT INTO '.cms_db_prefix().'module_templates (module_name, template_name, content, create_date, modified_date) VALUES (?,?,?,'.$time.','.$time.')';
		$db->Execute($query, array($modulename != ''?$modulename:$modinstance->get_name(), $tpl_name, $content));
	}
	else
	{
		$query = 'UPDATE '.cms_db_prefix().'module_templates SET content = ?, modified_date = '.$time.' WHERE module_name = ? AND template_name = ?';
		$db->Execute($query, array($content, $modulename != ''?$modulename:$modinstance->get_name(), $tpl_name));
	}
}

function cms_module_DeleteTemplate(&$modinstance, $tpl_name = '', $modulename = '')
{
	global $gCms;
	$db =& $gCms->GetDB();

	$parms = array($modulename != ''?$modulename:$modinstance->get_name());
	$query = "DELETE FROM ".cms_db_prefix()."module_templates WHERE module_name = ?";
	if( $tpl_name != '' )
	  {
	    $query .= 'AND template_name = ?';
	    $parms[] = $tpl_name;
	  }
	$result = $db->Execute($query, $parms);
	return ($result == false)?false:true;
}

function cms_module_IsFileTemplateCached(&$modinstance, $tpl_name, $designation = '', $timestamp = '', $cacheid = '')
{
	$ok = (strpos($tpl_name, '..') === false);
	if (!$ok) return;

	global $gCms;
	$smarty = &$gCms->GetSmarty();
	$oldcache = $smarty->caching;
	$smarty->caching = false;
	$result = $smarty->is_cached('module_file_tpl:'.$modinstance->get_name().';'.$tpl_name, $cacheid, ($designation != ''?$designation:$modinstance->get_name()));

	if ($result == true && $timestamp != '' && intval($smarty->_cache_info['timestamp']) < intval($timestamp))
	{
		$smarty->clear_cache('module_file_tpl:'.$modinstance->get_name().';'.$tpl_name, $cacheid, ($designation != ''?$designation:$modinstance->get_name()));
		$result = false;
	}

	$smarty->caching = $oldcache;
	return $result;
}

function cms_module_process_template(&$modinstance, $tpl_name, $id, $return_id, $designation = '', $cache = false, $cacheid = '')
{
	$smarty = cms_smarty();
	
	$smarty->assign_by_ref('cms_mapi_module', $modinstance);
	$smarty->assign('cms_mapi_id', $id);
	$smarty->assign('cms_mapi_return_id', $return_id);

	$result = $smarty->fetch('module_file_tpl:'.$modinstance->get_name().';'.$tpl_name, $cacheid, ($designation != ''?$designation:$modinstance->get_name()));

	return $result;
}

function cms_module_IsDatabaseTemplateCached(&$modinstance, $tpl_name, $designation = '', $timestamp = '')
{
	$ok = (strpos($tpl_name, '..') === false);
	if (!$ok) return;

	global $gCms;
	$smarty = &$gCms->GetSmarty();
	$oldcache = $smarty->caching;
	$smarty->caching = false;
	
	$result = $smarty->is_cached('module_db_tpl:'.$modinstance->get_name().';'.$tpl_name, '', ($designation != ''?$designation:$modinstance->get_name()));

	if ($result == true && $timestamp != '' && intval($smarty->_cache_info['timestamp']) < intval($timestamp))
	{
		$smarty->clear_cache('module_file_tpl:'.$modinstance->get_name().';'.$tpl_name, '', ($designation != ''?$designation:$modinstance->get_name()));
		$result = false;
	}

	$smarty->caching = $oldcache;
	return $result;
}

/**
 * Given a template in a variable, this method processes it through smarty
 * note, there is no caching involved.
 */
function cms_module_ProcessTemplateFromData(&$modinstance, $data)
{
	$smarty = cms_smarty();
	$smarty->_compile_source('temporary template', $data, $_compiled );
	@ob_start();
	$smarty->_eval('?>' . $_compiled);
	$_contents = @ob_get_contents();
	@ob_end_clean();
	return $_contents;
}

function cms_module_process_template_from_database(&$modinstance, $tpl_name, $id, $return_id, $designation = '', $cache = false)
{
	$smarty = cms_smarty();
	
	$smarty->assign_by_ref('cms_mapi_module', $modinstance);
	$smarty->assign('cms_mapi_id', $id);
	$smarty->assign('cms_mapi_return_id', $return_id);

	$result = $smarty->fetch('module_db_tpl:'.$modinstance->get_name().';'.$tpl_name, '', ($designation != ''?$designation:$modinstance->get_name()));

	return $result;
}

?>
