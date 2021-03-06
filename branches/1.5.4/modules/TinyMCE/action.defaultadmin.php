<?php

if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}
if (!isset($params["tab"]))$params["tab"]="settings";

$config=$this->cms->GetConfig();

/*
 $file=@file($config["root_url"]."/modules/TinyMCE/tinyconfig.php");
 if (!$file) {
 $this->ShowErrors($this->Lang("cannotreadconfig"));
 }
 */

if ($this->GetPreference("usestaticconfig")=="1") {
	if (!$this->IsTempWritable()) {
		echo $this->ShowErrors($this->Lang("usestaticconfigwarning"));
	} else {
		if ($this->GetPreference("usestaticconfig")) {
			$this->SaveStaticConfig();
		}
	}
}

echo $this->StartTabHeaders();
echo $this->SetTabHeader("settings",$this->Lang("settings"), ($params["tab"] == "settings")?true:false);
echo $this->SetTabHeader("toolbar",$this->Lang("toolbar_tab"), ($params["tab"] == "toolbar")?true:false);
echo $this->SetTabHeader("plugins",$this->Lang("plugins_tab"), ($params["tab"] == "plugins")?true:false);
echo $this->SetTabHeader("styles",$this->Lang("styles_tab"), ($params["tab"] == "styles")?true:false);
echo $this->SetTabHeader("advanced",$this->Lang("advanced_tab"), ($params["tab"] == "advanced")?true:false);
echo $this->EndTabHeaders();

echo $this->StartTabContent();

echo $this->StartTab("settings");
include(dirname(__FILE__).'/function.admin_settings.php');
echo $this->EndTab();


echo $this->StartTab("toolbar");
include(dirname(__FILE__).'/function.admin_toolbar.php');
echo $this->EndTab();

echo $this->StartTab("plugins");
include(dirname(__FILE__).'/function.admin_plugins.php');
echo $this->EndTab();

echo $this->StartTab("styles");
include(dirname(__FILE__).'/function.admin_styles.php');
echo $this->EndTab();

echo $this->StartTab("advanced");
include(dirname(__FILE__).'/function.admin_advanced.php');
echo $this->EndTab();


echo $this->EndTabContent();

echo "\n<div class=\"pageoverflow\" style=\"margin-top: 1em;\">\n";
echo $this->CreateFormStart($id);
echo $this->CreateTextArea(true,$id,$this->Lang("testareatext"),"testarea","","","","",80,15,"TinyMCE");
echo $this->CreateFormEnd();
echo "</div>\n";

?>