<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
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
#$Id: deletecssassoc.php 1112 2004-12-30 14:54:53Z wishy $

/**
 * This page is used to delete CSS association. It doesn't show any HTML and only does
 * treatments.
 * For more explanations about CSS associations, please the the header of
 * addcssassoc.php.
 *
 * Variable are passed by GET. Needed vars are :
 * - $css_id	: the id of the CSS link
 * - $id		: the id of the element the CSS is linked to
 * - $type		: the type of the element the CSS is linked to
 *				  (only template for the moment)
 *
 * @since	0.6
 * @author	calexico
 */


$CMS_ADMIN_PAGE=1;

require_once("../include.php");

check_login();

#******************************************************************************
# global vars definition
#******************************************************************************

# this var is used to check if we'll delete or not
# it is set to false when an error is encountered
$dodelete = true;

#******************************************************************************
# start of the treatment
#******************************************************************************
if (isset($_GET["template_id"]) && isset($_GET["id"]) && isset($_GET["type"]))
{

	# we get the parameters
	$template_id = $_GET["template_id"];
	$id = $_GET["id"];
	$type = $_GET["type"];

	# we check the permissions
	$userid = get_userid();
	$access = check_permission($userid, 'Remove Stylesheet Assoc');

#******************************************************************************
# the user has the right to delete association, we can go on
#******************************************************************************
	if ($access)
	{

#******************************************************************************
# we first have to get the name of the element the CSS is linked to
# this is for logging of actions
#******************************************************************************
		if ($type == 'template')
		{
			# first we get the name of the template for logging
			$query = "SELECT css_name FROM ".cms_db_prefix()."css WHERE css_id = '$id'";
			$result = $db->Execute($query);

			if ($result && $result->RowCount())
			{
				$line = $result->FetchRow();
				$name = $line['css_name'];
			}
			else
			{
				$dodelete = false;
				$error = lang('errorgettingcssname');
			}
		}

#******************************************************************************
# everythings look ok, we can delete
#******************************************************************************
		if ($dodelete)
		{
			$query = "DELETE FROM ".cms_db_prefix()."css_assoc where assoc_to_id = '$template_id' AND assoc_type = '$type' AND assoc_css_id = '$id'";
			$result = $db->Execute($query);

			if ($result)
			{
				audit($id, (isset($name)?$name:""), 'Deleted Stylesheet Association');

				# now updating template
				if ("template" == $type)
				{
					$tplquery = "UPDATE ".cms_db_prefix()."templates SET modified_date = '".$db->DBTimeStamp(time())."'
						WHERE template_id = '$template_id'";
					$tplresult = $db->Execute($tplquery);
				}
			}
			else
			{
				$dodelete = false;
				$error = lang('errordeletingassociation');
			}
		}
	} # end of if access
	else
	{
		$dodelete = false;
		$error = lang('noaccessto', array(lang('removecssassociation')));
	}
} # end of if params
else
{
	$dodelete = false;
	$error = lang('missingparams');
}

#******************************************************************************
# end of treatment, redirecting
#******************************************************************************
if ($dodelete)
{
	redirect("templatecss.php?id=$id&type=$type");
}
else
{
	redirect("templatecss.php?id=$id&type=$type&message=$error");
}

# vim:ts=4 sw=4 noet
?>
