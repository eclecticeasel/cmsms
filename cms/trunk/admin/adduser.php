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

check_login();

$error = "";

$user= "";
if (isset($_POST["user"])) $user = $_POST["user"];

$password= "";
if (isset($_POST["password"])) $password = $_POST["password"];

$passwordagain= "";
if (isset($_POST["passwordagain"])) $passwordagain = $_POST["passwordagain"];

$active = 1;
if (!isset($_POST["active"]) && isset($_POST["adduser"])) $active = 0;

if (isset($_POST["use_wysiwyg"]))$use_wysiwyg = $_POST["use_wysiwyg"];

if (isset($_POST["cancel"])) {
	redirect("listusers.php");
	return;
}

if (isset($_POST["adduser"])) {

	$validinfo = true;

	if ($user == "") {
		$validinfo = false;
		$error .= "<li>".$gettext->gettext("No username given!")."</li>";
	}

	if ($password == "") {
		$validinfo = false;
		$error .= "<li>".$gettext->gettext("No password given!")."</li>";
	}
	else if ($password != $passwordagain) {
		#We don't want to see this if no password was given
		$validinfo = false;
		$error .= "<li>".$gettext->gettext("Passwords do not match!")."</li>";
	}

	if ($validinfo) {
		$new_user_id = $db->GenID(cms_db_prefix()."users_seq");
		$query = "INSERT INTO ".cms_db_prefix()."users (user_id, username, password, active, create_date, modified_date) VALUES ($new_user_id, ".$db->qstr($user).", ".$db->qstr(md5($password)).", $active, ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).")";
		$result = $db->Execute($query);
		if ($result) {
			set_preference($new_user_id, 'use_wysiwyg', $use_wysiwyg);
			audit($_SESSION["cms_admin_user_id"], $_SESSION["cms_admin_username"], $new_user_id, $user, 'Added User');
			redirect("listusers.php");
			return;
		}
		else {
			$error .= "<li>".$gettext->gettext("Error inserting user!")."</li>";
		}
	}
}

include_once("header.php");

if ($error != "") {
	echo "<ul class=\"error\">".$error."</ul>";
}

?>

<form method="post" action="adduser.php">

<div class="adminformSmall">

<h3><?=$gettext->gettext("Add User")?></h3>

<table border="0">

	<tr>
		<td>*<?=$gettext->gettext("Name")?>:</td>
		<td><input type="text" name="user" maxlength="255" value="<?=$user?>" class="standard"/></td>
	</tr>
	<tr>
		<td>*<?=$gettext->gettext("Password")?>:</td>
		<td><input type="password" name="password" maxlength="255" value="" class="standard"></td>
	</tr>
	<tr>
		<td>*<?=$gettext->gettext("Password (again)")?>:</td>
		<td><input type="password" name="passwordagain" maxlength="255" value="" class="standard"></td>
	</tr>
	<tr>
		<td><?=$gettext->gettext("Active")?>:</td>
		<td><input type="checkbox" name="active" <?=($active == 1?"checked":"")?>></td>
	</tr>
	<tr>
		<td><?=$gettext->gettext("Use WYSIWYG Editor for Content")?>:</td>
		<td>
			<select name="use_wysiwyg">
				<option value="1" <?= ($use_wysiwyg=="1"?"selected":"") ?>>True</option>
				<option value="0" <?= ($use_wysiwyg=="0"?"selected":"") ?>>False</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="hidden" name="adduser" value="true">
		<input type="submit" value="<?=$gettext->gettext("Submit")?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'">
		<input type="submit" name="cancel" value="<?=$gettext->gettext("Cancel")?>" class="button" onmouseover="this.className='buttonHover'" onmouseout="this.className='button'"></td>
	</tr>

</table>

</div>

</form>

<?php

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
