<?php
$author = $_SESSION['username'];
$dmbr = $_POST['dmbr'];
$terminal = $_POST['term'];
?>
<h3>Step 03</h3>
<hr>
<?php
foreach ($dmbr as $dmbr_key => $dmbr_value) {
	$sqlinsert = "
		INSERT INTO `checkin` (`id`, `memberid`, `check`, `status`, `author`, `terminal`)
		VALUES (NULL, '$dmbr_value', CURRENT_TIMESTAMP, '2', '$author', '$terminal')
	";
	if ($member = $db->Execute($sqlinsert) === false) {
		echo '<h4 style="text-align:center;">Error inserting: '.$db->ErrorMsg().'<br /><br />[ '.$back.' ]</h4>';
	} else {
		echo "Checkout berhasil<br />";
		echo $dmbr_value."<br /><br />";
	}
}
?>