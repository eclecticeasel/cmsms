<?php

echo "<p>Adding module_templates table...";

$dbdict = NewDataDictionary($db);
$flds = "
	module_name C(255),
	template_name C(255),
	content X,
	create_date T,
	modified_date T
";
$taboptarray = array('mysql' => 'TYPE=MyISAM');
$sqlarray = $dbdict->CreateTableSQL(cms_db_prefix()."module_templates", $flds, $taboptarray);
$dbdict->ExecuteSQLArray($sqlarray);

echo "[done]</p>";

echo '<p>Updating schema version... ';

$query = "UPDATE ".cms_db_prefix()."version SET version = 10";
$db->Execute($query);

echo '[done]</p>';

# vim:ts=4 sw=4 noet
?>
