<?php
/*
 The following file enables the uploading of each image from the java applet.
 */


@include(dirname(dirname(dirname($_SERVER["SCRIPT_FILENAME"])))."/include.php");
$module =&$gCms->modules["FileManager"]['object'];
//$message = $module->GetPreference("postletmessage","");
//$error = $module->GetPreference("postleterror","");

$error="";
if (isset($_SESSION["postleterror"])) $error=$_SESSION["postleterror"];

$message="";
if (isset($_SESSION["postletmessage"])) $error=$_SESSION["postletmessage"];

echo "RECEIVING:";



//$uploaddir = "../..".$_GET["path"];//'../../upload/';
$uploaddir=$config["root_path"].$_REQUEST["path"];
if ($uploaddir[strlen($uploaddir)-1]!="/") $uploaddir.="/";
//echo $uploaddir;
//echo $uploaddir;
//print_r($_SERVER);

//$fpath = $_FILES['userfile']['name'];
//$fext = array_pop(explode('.', $fpath));


/*
 $allow_or_deny = true;
 // If the above is true, then this states whether the array of files is a list of
 // extensions to ALLOW, or DENY
 $allow_or_deny_method = "deny"; // "allow" or "deny"
 $file_extension_list = array("php","asp","pl");
 // -----------------------------------------------------------------------------
 if ($allow_or_deny){
 if (($allow_or_deny_method == "allow" && !in_array(strtolower(array_pop(explode('.', $_FILES['userfile']['name']))), $file_extension_list))
 || ($allow_or_deny_method == "deny" && in_array(strtolower(array_pop(explode('.', $_FILES['userfile']['name']))), $file_extension_list))){
 // Atempt to upload a file with a specific extension when NOT allowed.
 // 403 error
 header("HTTP/1.1 403 Forbidden");
 echo "POSTLET REPLY\r\n";
 echo "POSTLET:NO\r\n";
 echo "POSTLET:FILE TYPE NOT ALLOWED\r\n";
 echo "POSTLET:ABORT THIS\r\n"; // Postlet should NOT send this file again.
 echo "END POSTLET REPLY\r\n";
 exit;
 }
 }
 */



//$file=fopen("postletdebug.txt","w");
//fputs($file,"inside\n");
$message="";
$error="";
if ($_FILES["userfile"]["size"]>$config["max_upload_size"]) {
	$error.=$_FILES[userfile]["name"]." ".$this->Lang("filetoobig")."<br/>";
} else {
	if (cms_move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$_FILES['userfile']['name'])) {
		// All replies MUST start with "POSTLET REPLY", if they don't, then Postlet will
		// not read the reply and will assume the file uploaded successfully.
		echo "POSTLET REPLY\r\n";
		// "YES" tells Postlet that this file was successfully uploaded.
		echo "POSTLET:YES\r\n";
		// End the Postlet reply
		echo "END POSTLET REPLY\r\n";
		$message.=$_FILES['userfile']['name']." ".$module->Lang("uploadsuccess")."<br/>";
		//exit;
	} else {
		// If the file can not be uploaded (most likely due to size), then output the
		// correct error code
		// If $_FILES is EMPTY, or $_FILES['userfile']['error']==1 then TOO LARGE
		if (count($_FILES)==0 || $_FILES['userfile']['error']==1){
			// All replies MUST start with "POSTLET REPLY", if they don't, then Postlet will
			// not read the reply and will assume the file uploaded successfully.
			header("HTTP/1.1 413 Request Entity Too Large");
			echo "POSTLET REPLY\r\n";
			echo "POSTLET:NO\r\n";
			echo "POSTLET:TOO LARGE\r\n";
			echo "POSTLET:ABORT THIS\r\n"; // Postlet should NOT send this file again.
			echo "END POSTLET REPLY\r\n";
			$error.=$_FILES['userfile']['name']." ".$module->Lang("uploadfail")." (too large)<br/>";
			//  exit;
		}
		// Unable to write the file to the server ALL WILL FAIL
		else if ($_FILES['userfile']['error']==6 || $_FILES['userfile']['error']==7){
			// All replies MUST start with "POSTLET REPLY", if they don't, then Postlet will
			// not read the reply and will assume the file uploaded successfully.
			header("HTTP/1.1 500 Internal Server Error");
			echo "POSTLET REPLY\r\n";
			echo "POSTLET:NO\r\n";
			echo "POSTLET:SERVER ERROR\r\n";
			echo "POSTLET:ABORT ALL\r\n"; // Postlet should NOT send any more files
			echo "END POSTLET REPLY\r\n";
			$error.=$_FILES['userfile']['name']." ".$module->Lang("uploadfail")." (server error)<br/>";
			//exit;
		}
		// Unsure of the error here (leaves 2,3,4, which means try again)
		else {
			// All replies MUST start with "POSTLET REPLY", if they don't, then Postlet will
			// not read the reply and will assume the file uploaded successfully.
			header("HTTP/1.1 500 Internal Server Error");
			echo "POSTLET REPLY\r\n";
			echo "POSTLET:NO\r\n";
			echo "POSTLET:UNKNOWN ERROR\r\n";
			echo "POSTLET:RETRY\r\n";
			print_r($_REQUEST); // Possible usefull for debugging
			echo "END POSTLET REPLY\r\n";
			$error.=$_FILES['userfile']['name']." ".$module->Lang("uploadfail")." (error)<br/>";
			// exit;
		}
	}
}

/*

if (cms_move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $fpath)) {
//fputs($file,"yes\n");
echo "YES";
$message.=$_FILES['userfile']['name']." ".$module->Lang("uploadsuccess")."<br/>";
} else {
//	fputs($file,"no\n");
//fputs($file,print_r($_FILES));
echo "NO";
//print_r($_FILES);
$error.=$_FILES['userfile']['name']." ".$module->Lang("uploadfail")."<br/>";
}

*/
//fclose($file);
if (session_id()=="") {
	session_start();
}

/*$_SESSION["postletmessage"]="";
 unset($_SESSION["postletmessage"]);
 $_SESSION["postleterror"]="";
 unset($_SESSION["postleterror"]);
 */
if ($message!="") $_SESSION["postletmessage"].=$message;
if ($error!="") $_SESSION["postleterror"].=$error;
//echo $_SESSION["postleterror"];



?>
