<h3>Step 01</h3>
<hr>
<form class="skeleton" name="batch01" method="post" action="index.php?view=batchstep02">
<?php
$member = $db->Execute("SELECT DISTINCT memberid FROM checkin");
while($data_member = $member->FetchRow()) {
?>
	<label for="id[<?=$data_member['memberid']?>]">ID:</label>
	<input id="id[<?=$data_member['memberid']?>]" type="text" name="nilai[<?=$data_member['memberid']?>]" value="<?=$data_member['memberid']?>">
<?php
} //EOF while($data_member = $member->FetchRow())
?>
	<button type="submit">Next</button>
</form>