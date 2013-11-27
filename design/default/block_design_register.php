<?php
include ("application/app_set_param.php");
$memberid = $_GET['memberid'];

	$sqlregister = "
		INSERT INTO `member` (`memberid`)
		VALUES ('$memberid')
	";
	if ($db->Execute($sqlregister) === false) { 
        echo 'error inserting: '.$db->ErrorMsg().'<BR>'; 
    } else {
		echo "$code83";
	}
?>