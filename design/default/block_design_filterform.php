<form action="index.php?view=filres" name="filter" method="post">
	<label for="idmember">ID Member</label>
	<input type="text" name="idmember" value="">
	<label for="tanggal">Tanggal</label>
	<select name="tanggal">
		<option value=""></option>
<?php
	$tgl = $db->Execute("SELECT DISTINCT DATE_FORMAT(`check`, '%Y-%m-%d') AS tgl FROM `checkin` ORDER BY tgl ASC");
	while($data_tgl = $tgl->FetchRow()) {
?>
		<option value="<?=$data_tgl['tgl']?>"><?=date('d F Y', strtotime($data_tgl['tgl']))?></option>
<?php
	}// EOF while($data_tgl = $tgl->FetchRow())
?>
	</select>
	<label for="status">Status</label>
	<select name="status">
		<option value=""></option>
<?php
	$status = $db->Execute("SELECT * FROM status");
	while($data_status = $status->FetchRow()) {
?>
		<option value="<?=$data_status['status']?>"><?=$data_status['name']?></option>
<?php
	}// EOF while($data_status = $status->FetchRow())
?>
	</select>
	<label for="author">Author</label>
	<select name="author">
		<option value=""></option>
<?php
	$author = $db->Execute("SELECT DISTINCT author FROM checkin");
	while($data_author = $author->FetchRow()) {
?>
		<option value="<?=$data_author['author']?>"><?=$data_author['author']?></option>
<?php
	}// EOF while($data_author = $author->FetchRow())
?>
	</select>
	<button type="submit">Search</button>
</form>