<?php
include ("application/app_set_param.php");
$memberid = $_GET['memberid'];
$updateauth = $db->Execute("SELECT * FROM member WHERE memberid=$memberid");
while($data_auth = $updateauth->FetchRow()) {
	$dauth = $data_auth['id'];
}
if (empty($dauth)) {
	echo "<h4 style='text-align:center;'>$memberid</h4>";
	echo "<h5 style='text-align:center;'>$code98</h5>";
} else {
	$record["status"] = 1; 
	$db->AutoExecute(member,$record,'UPDATE', "memberid='$memberid'");
	echo "<h4 style='text-align:center;'>$memberid : Nomor ID berhasil diaktifkan</h4>";
}
?>