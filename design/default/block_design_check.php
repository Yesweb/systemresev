<?php
?>
<center>
<?php
if ($cek_termstat == 1) {
	echo "<h4>Checkin</h4>";
} else if ($cek_termstat == 2) {
	echo "<h4>Chekout</h4>";
} else {
	echo "<h4>Checkin - Chekout</h4>";
}
?>
<form class="skeleton" action="" method="get">
	<input type="hidden" name="view" value="input">
	<input type="text" id="focus" name="memberid" value="">
	<input type="hidden" name="term" value="900">
	<input type="hidden" name="termstat" value="<?=$cek_termstat?>">
	<input class="submitbutton" type="submit" value="Submit">
</form>
</center>