<?php
$id = $_GET['id'];
?>
<h2>History [ <?=$id?> ]</h2>
<ul>
	<li><strong>[Tanggal]&nbsp; - &nbsp;[Status]&nbsp; - &nbsp;[Author]</strong></li>
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
	<li><?=$data_hist['date']?>&nbsp; - &nbsp;<?=$data_hist['stat_name']?>&nbsp; - &nbsp;<?=$data_hist['author']?></li>
<?php
} // EOF while($data_hist = $hist->FetchRow())
?>
</ul>