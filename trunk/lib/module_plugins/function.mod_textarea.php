<?php
#CMS - CMS Made Simple
#(c)2004-2006 by Ted Kulp (ted@cmsmadesimple.org)
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

function smarty_cms_function_mod_textarea($params, &$smarty)
{
	$module =& $smarty->get_template_vars('cms_mapi_module');
	$id = $smarty->get_template_vars('cms_mapi_id');

	return $module->create_text_area(coalesce_key(
		$params, 'wysiwyg', false),
		$id,
		coalesce_key($params, 'value', ''),
		$params['name'], 
		coalesce_key($params, 'class_name', ''),
		coalesce_key($params, 'html_id',
		coalesce_key($params, 'id', '')),
		'', 
		coalesce_key($params, 'stylesheet', ''),
		coalesce_key($params, 'cols', '60'),
		coalesce_key($params, 'rows', '10'), 
		coalesce_key($params, 'forcewysiwyg', ''));
}

?>
