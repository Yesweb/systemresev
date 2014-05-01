<form action="index.php?view=filres" name="filter" method="post">
<div class="eight columns">
	<label for="idmember">ID Member</label>
	<input type="text" name="idmember" value="" style="width:86%;">
</div>
<div class="four columns">
	<label for="tanggal">Tanggal</label>
	<select name="tanggal" style="width:86%;">
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
</div>
<div class="four columns">
	<label for="status">Status</label>
	<select name="status" style="width:86%;">
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
</div>
<div class="four columns">
	<label for="author">Author</label>
	<select name="author" style="width:86%;">
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
</div>
<div class="four columns">
	<button type="submit" style="width:86%;">Search</button>
</div>
</form>
<div style="clear:both;"></div>