<?php
if (!isset($gCms)) exit;

if( !$this->CheckPermission( 'Modify Site Preferences' ) )
{
  return;
}
$this->SetPreference('showautodiscovery', $params['showautodiscovery']);
$this->SetPreference('autodiscoverylink', $params['autodiscoverylink']);
$this->SetPreference('dateformat', $params['dateformat']);
$this->SetPreference('default_category', $params['default_category']);
$params = array('tab_message'=> 'optionsupdated', 'active_tab' => 'options');
$this->Redirect($id, 'defaultadmin', '', $params);
?>
