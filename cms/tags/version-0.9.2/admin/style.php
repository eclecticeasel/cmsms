<?php

//CHANGED
Header ("Content-type: text/css");
require_once("../include.php");
require_once("../lib/classes/class.user.inc.php");
$theme=get_preference(get_userid(),"admintheme");
//
if (file_exists(dirname(__FILE__)."/themes/".$theme."/style.css")) {  
	readfile(dirname(__FILE__)."/themes/".$theme."/style.css");
	//include(dirname(__FILE__)."/themes/".$theme."/style.css");
} else {
	readfile(dirname(__FILE__)."/themes/default/style.css");
	//include(dirname(__FILE__)."/themes/default/style.css");
}
//STOP

?>