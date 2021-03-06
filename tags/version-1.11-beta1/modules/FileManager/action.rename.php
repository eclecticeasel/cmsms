<?php
if (!function_exists("cmsms")) exit;
if (!$this->CheckPermission("Modify Files") && !$this->AdvancedAccessAllowed()) exit;

if (isset($params["cancel"])) {
  $this->Redirect($id,"defaultadmin",$returnid,$params);
}

$selall = $params['selall'];
if( !is_array($selall) ) {
  $selall = unserialize($selall);
}
if (count($selall)==0) {
  $params["fmerror"]="nofilesselected";
  $this->Redirect($id,"defaultadmin",$returnid,$params);
}
//echo count($selall);
if (count($selall)>1) {
  //echo "hi";die();
  $params["fmerror"]="morethanonefiledirselected";
  $this->Redirect($id,"defaultadmin",$returnid,$params);
}

$config=cmsms()->GetConfig();

$oldname=$this->decodefilename($selall[0]);
$newname=$oldname; //for initial input box

if (isset($params["newname"])) {
  $newname=$params["newname"];
  if (!filemanager_utils::is_valid_filename($newname)) {
    echo $this->ShowErrors($this->Lang("invaliddestname"));
  } else {
  $fullnewname=$this->Slashes($config["root_path"]."/".$params["path"]."/".$params["newname"]);
  //echo $fullnewname;die();
  if (file_exists($fullnewname)) {
    echo $this->ShowErrors($this->Lang("namealreadyexists"));
    //fallthrough
  } else {
    $fulloldname=$this->Slashes($config["root_path"]."/".$params["path"]."/".$oldname);
    if (@rename($fulloldname,$fullnewname)) {
      $paramsnofiles["fmmessage"]="renamesuccess"; //strips the file data
      $this->Audit('',"File Manager", "Renamed file: ".$fullnewname);
      $this->Redirect($id,"defaultadmin",$returnid,$paramsnofiles);
    } else {
      $params["fmerror"]="renameerror";
      $this->Redirect($id,"defaultadmin",$returnid,$params);
    }
  }
}
}

if( is_array($params['selall']) ) {
  $params['selall'] = serialize($params['selall']);
}
$this->smarty->assign('startform', $this->CreateFormStart($id, 'fileaction', $returnid,"post","",false,"",$params));
//$this->CreateInputHidden($id,"fileaction","rename");
$this->smarty->assign('newnametext',$this->lang("newname"));
$this->smarty->assign('newnameinput',$this->CreateInputText($id,"newname",$newname,40));

$this->smarty->assign('endform', $this->CreateFormEnd());

$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->Lang('rename')));
$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', $this->Lang('cancel')));
echo $this->ProcessTemplate('renamefile.tpl');

?>
