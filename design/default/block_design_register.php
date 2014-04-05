<?php
include ("lib/back.php");
include ("application/app_set_param.php");
$memberid = $_GET['memberid'];
$reg_auth = $_SESSION['username'];

if (!is_numeric($memberid)) {
	echo "<h4 style='text-align:center;'>$code99<br /><br />[ $back ]</h4>";
} else if ($memberid < 100000000001) {
	echo "<h4 style='text-align:center;'>$code101<br /><br />[ $back ]</h4>";
} else if ($memberid > 100099999999) {
	echo "<h4 style='text-align:center;'>$code102<br /><br />[ $back ]</h4>";
} else {

	$sqlregister = "
		INSERT INTO `member` (`memberid`, `reg_auth`)
		VALUES ('$memberid', '$reg_auth')
	";
	if ($db->Execute($sqlregister) === false) { 
        echo '<h4 style="text-align:center;">100: No. ID sudah terdaftar. Error inserting: '.$db->ErrorMsg().'<br /><br />[ '.$back.' ]</h4>'; 
    } else {
		echo "<center>";
		echo "<h4>$memberid<br />$code83</h4><br />";
		include ("design/".$_CONFIG['templ']['main']."/block_design_registerform.php");
		echo "</center>";
	}

} //EOF !is_numeric($memberid))
?>