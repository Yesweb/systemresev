<?php
$id = $_GET['id'];
?>
<h3>History</h3>
<h4>No. ID: <?=number_format($id,0,",","-")?></h4>
<br />
<table class="zebra-striped">
	<tr>
		<th>Tanggal (Jam)</th><th>Status</th><th>Author</th>
	</tr>
<?php

$hist = $db->Execute("
	SELECT * FROM `member_stat_history`
	LEFT JOIN `member_stat`
	ON member_stat_history.status=member_stat.stat_code
	WHERE memberid=$id
	ORDER BY date DESC
	");
while($data_hist = $hist->FetchRow()) {
?>
	<tr>
		<td><?=date('d F Y (H:i:s)', strtotime($data_hist['date']))?></td><td><?=$data_hist['stat_name']?></td><td><?=$data_hist['author']?></td>
	</tr>
<?php
} // EOF while($data_hist = $hist->FetchRow())
?>
	<tr>
		<td><strong>[ <?=$back?> ]</strong></td><td>&nbsp;</td><td>&nbsp;</td>
	</tr>
</table>