<?php
	include ("cek_login.php");
	include ("lib/adodb/adodb.inc.php");
	include ("lang/indonesia.php");
	include ("config.php");
	include ("design/".$_CONFIG['templ']['main']."/layout.php");
	

	/* Test connection 
	$rs = $db->Execute("SELECT * FROM user WHERE username = '$user'");
	print "<pre>";
	print_r($rs->GetRows());
	print "</pre>";
	*/

	//print "<pre>"; 
	//print_r($_CONFIG); 
	//print "</pre>";

?>