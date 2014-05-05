<?php
$nilai = $_POST['nilai'];
?>
<h3>Step 02</h3>
<hr>
<form class="skeleton" name="batch02" method="post" action="index.php?view=batchstep03">
<?php
foreach ($nilai as $nilai_key => $nilai_value) {
	$sqlselect = "
		SELECT MAX(id) AS `maxid`
		FROM `checkin`
		WHERE `memberid`=$nilai_value
		GROUP BY `memberid`
	";
	$member = $db->Execute($sqlselect);
	while($data_member = $member->FetchRow()) {
		$dmem = $data_member['maxid'];
	}

	$sqlmem = "
		SELECT *
		FROM `checkin`
		WHERE `id`=$dmem AND `status`=1
	";
	$mem = $db->Execute($sqlmem);
	while($data_mem = $mem->FetchRow()) {
		$memid = $data_mem['id'];
		$memstat = $data_mem['status'];
?>
		<label for="id[<?=$memid?>]">id[<?=$memid?>]</label>
		<input id="id[<?=$memid?>]" type="text" name="dmbr[<?=$memid?>]" value="<?=$data_mem['memberid']?>">
		<input type="hidden" name="term" value="901">
<?php
	}
}
if (empty($memid)) {
	echo "<h4>Tidak ada member checkin</h4>";
} else {
	echo '<button type="submit">Batch Now!</button>';
}
?>
</form>