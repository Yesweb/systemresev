<?php
include ("lib/back.php");
include ("application/app_set_param.php");
$memberid = $_GET['memberid'];

$cek = $db->Execute("SELECT status FROM member WHERE memberid=$memberid");
while($data_cek = $cek->FetchRow()) {
	$cek_res = $data_cek['status'];
}
		
if (!is_numeric($memberid)) {
	echo "<h4 style='text-align:center;'>$code99<br /><br />[ $back ]</h4>";
} else if ($cek_res == 1) {
	echo "<h4 style='text-align:center;'>$code103<br /><br />[ $back ]</h4>";
} else {

	$updateauth = $db->Execute("SELECT * FROM member WHERE memberid=$memberid");
	while($data_auth = $updateauth->FetchRow()) {
		$dauth = $data_auth['id'];
	}
	if (empty($dauth)) {
		echo "<h4 style='text-align:center;'>$memberid</h4>";
		echo "<h4 style='text-align:center;'>$code98<br /><br />[ $back ]</h4>";
	} else {
		$record["status"] = 1; 
		$db->AutoExecute(member,$record,'UPDATE', "memberid='$memberid'");
		echo "<center>";
		echo "<h4>$memberid<br />$code84</h4>";
		include ("design/".$_CONFIG['templ']['main']."/block_design_aktivasiform.php");
		echo "</center>";
	}
} //EOF if (!is_numeric($memberid))
?>