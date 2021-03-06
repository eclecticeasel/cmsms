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

require_once("../include.php");

check_login($config);

include_once("header.php");

if (isset($_GET["message"])) {
	echo "<p class=\"error\">".$_GET["message"]."</p>";
}

?>
<h3><?=GetText::gettext("Current Sections")?></h3>
<?php

	$userid = get_userid();
	$edit = check_permission($config, $userid, 'Modify Section');
	$remove = check_permission($config, $userid, 'Remove Section');

	$db = new DB($config);

        $query = "SELECT section_id, section_name, active FROM ".$config->db_prefix."sections ORDER BY section_id";
        $result = $db->query($query);

	if (mysql_num_rows($result) > 0) {

		echo '<table border="1" cellpadding="2" cellspacing="0" class="admintable">'."\n";
		echo "<thead class=\"tbhead\">\n";
		echo "<tr>\n";
		echo "<th>".GetText::gettext("Section")."</th>\n";
		echo "<th>".GetText::gettext("Active")."</th>\n";
		if ($edit)
			echo "<th>&nbsp;</th>\n";
		if ($remove)
			echo "<th>&nbsp;</th>\n";
		echo "</tr>\n";
		echo "</thead>\n";
		echo "<tbody>\n";

		$currow = "row1";

		while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

			echo "<tr class=\"$currow\">\n";
			echo "<td>".$row["section_name"]."</td>\n";
			echo "<td>".($row["active"] == 1?GetText::gettext("True"):GetText::gettext("False"))."</td>\n";
			if ($edit)
				echo "<td><a href=\"editsection.php?section_id=".$row["section_id"]."\">".GetText::gettext("Edit")."</a></td>\n";
			if ($remove)
				echo "<td><a href=\"deletesection.php?section_id=".$row["section_id"]."\" onclick=\"return confirm('".GetText::gettext("Are you sure you want to delete?")."');\">".GetText::gettext("Delete")."</a></td>\n";
			echo "</tr>\n";

			($currow=="row1"?$currow="row2":$currow="row1");

		}

		echo "</tbody>\n";
		echo "</table>\n";

	}

	mysql_free_result($result);
	$db->query($link);

if (check_permission($config, $userid, 'Add Section')) {
?>

<p><a href="addsection.php"><?=GetText::gettext("Add New Section")?></a></p>

<?php
}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
