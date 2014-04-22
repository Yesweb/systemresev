<?php
$id = $_GET['id'];
?>
<h2>History</h2>
<h4>No. ID: <?=number_format($id,0,",","-")?></h4>
<br />
<ul>
	<li><strong>[Tanggal] [Jam]&nbsp; - &nbsp;[Status]&nbsp; - &nbsp;[Author]</strong></li>
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
	<li><?=date('d F Y (H:i:s)', strtotime($data_hist['date']))?>&nbsp; - &nbsp;<?=$data_hist['stat_name']?>&nbsp; - &nbsp;<?=$data_hist['author']?></li>
<?php
} // EOF while($data_hist = $hist->FetchRow())
?>
	<li><strong>[ <?=$back?> ]</strong></li>
</ul>