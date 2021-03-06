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

$CMS_ADMIN_PAGE=1;

require_once("../include.php");

audit(-1, "", 'User Logout');

unset($_SESSION["cms_admin_user_id"]);
setcookie("cms_admin_user_id", "", time() - 3600);

#Perform the logout_post callback
foreach($gCms->modules as $key=>$value)
{
	if (isset($gCms->modules[$key]['logout_post_function']) &&
		$gCms->modules[$key]['Installed'] == true &&
		$gCms->modules[$key]['Active'] == true)
	{
		call_user_func_array($gCms->modules[$key]['logout_post_function'], array(&$gCms));
	}
}

echo ('<html><head><title>Logging in... please wait</title><meta http-equiv="refresh" content="1; url=./login.php"></head><body>Logging out.  Redirecting to <a href="./login.php">login</a> page...</body></html>');
#redirect("index.php");

# vim:ts=4 sw=4 noet
?>
