<?php
$usern = $_SESSION['username'];
$stat = $db->Execute("SELECT permit FROM user WHERE username='$usern'");
while($data_termstat = $stat->FetchRow()) {
	$cek_termstat = $data_termstat['permit'];
}
?>
<center>
<?php
if ($cek_termstat == 1) {
	echo "<h4>Checkin</h4>";
} else if ($cek_termstat == 2) {
	echo "<h4>Chekout</h4>";
} else {
	echo "<h4>Checkin/Chekout</h4>";
}
?>
<form action="" method="get">
	<input type="hidden" name="view" value="input">
	<input type="text" id="focus" name="memberid" value="">
	<input type="hidden" name="term" value="900">
	<input type="hidden" name="termstat" value="<?=$cek_termstat?>">
	<input class="submitbutton" type="submit" value="Submit">
</form>
</center>