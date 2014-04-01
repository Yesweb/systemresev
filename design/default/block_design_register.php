<?php
include ("application/app_set_param.php");
$memberid = $_GET['memberid'];

if (!is_numeric($memberid)) {
	echo "<h4 style='text-align:center;'>$code99</h4>";
} else {

	$sqlregister = "
		INSERT INTO `member` (`memberid`)
		VALUES ('$memberid')
	";
	if ($db->Execute($sqlregister) === false) { 
        echo '<h4 style="text-align:center;">Error inserting: '.$db->ErrorMsg().'</h4><BR>'; 
    } else {
		echo "<center>";
		echo "<h4>$memberid<br />$code83</h4><br />";
		include ("design/".$_CONFIG['templ']['main']."/block_design_registerform.php");
		echo "</center>";
	}

} //EOF !is_numeric($memberid))
?>