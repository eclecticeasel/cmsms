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
#$Id: lang.php 2428 2006-01-13 01:30:35Z wishy $

#Nice decent default
$current_language = "en_US";

#Only do language stuff for admin pages
if (isset($CMS_ADMIN_PAGE)) {

	$nls = array();
	$lang = array();

	#Read in all current languages...
	$dir = dirname(__FILE__)."/lang";
	$ls = dir($dir);
	while (($file = $ls->read()) != "") {
		if (is_file("$dir/$file") && strpos($file, "nls.php") != 0) {
			include("$dir/$file");
		}
	}

	#Check to see if there is already a language in use...
	if (isset($_POST["default_cms_lang"]))
	{
		$current_language = $_POST["default_cms_lang"];
		if ($current_language == '')
		{
			setcookie("cms_language", '', time() - 3600);
		}
		else
		{
			setcookie("cms_language", $_POST["change_cms_lang"]);
		}
	}
	else if (isset($_SESSION['login_cms_language']))
	{
		debug_buffer('Setting language to: ' . $_SESSION['login_cms_language']);
		$current_language = $_SESSION['login_cms_language'];
		setcookie('cms_language', $_SESSION['login_cms_language']);
		unset($_SESSION['login_cms_language']);
	}
	else if (isset($_COOKIE["cms_language"]))
	{
		$current_language = $_COOKIE["cms_language"];
	}

	if ($current_language == '')
	{
		#No, take a stab at figuring out the default language...
		#Figure out default language and set it if it exists
		if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
			$alllang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
			if (strpos($alllang, ";") !== FALSE)
				$alllang = substr($alllang,0,strpos($alllang, ";"));
			$langs = explode(",", $alllang);

			foreach ($langs as $onelang)
			{
				#Check to see if lang exists...
				if (isset($nls['language'][$onelang]))
				{
					$current_language = $onelang;
					setcookie("cms_language", $onelang);
					break;
				}
				#Check to see if alias exists...
				if (isset($nls['alias'][$onelang]))
				{
					$alias = $nls['alias'][$onelang];
					if (isset($nls['language'][$alias]))
					{
						$current_language = $alias;
						setcookie("cms_language", $alias);
						break;
					}
				}
			}
		}
	}

    #Ok, we have a language to load, let's load it already...
    $file = dirname(__FILE__) . "/lang/ext/" . $current_language . "/admin.inc.php";
	if (!is_file($file))
	{
		$file = dirname(__FILE__) . "/lang/" . $current_language . "/admin.inc.php";
	}

    if (is_file($file) && strlen($current_language) == 5 && strpos($current_language, ".") === false)
    {  
        include ($file);
    }  

	global $gCms;
	$gCms->nls = $nls;
	$gCms->current_language = $current_language;
}

# vim:ts=4 sw=4 noet
?>
