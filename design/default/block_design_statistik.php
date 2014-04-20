<h2>Statistik Pengunjung Pameran</h2>
<ul>
<?php
	$tgl = $db->Execute("
		SELECT DISTINCT DATE_FORMAT(`check`, '%Y-%m-%d') AS tgl
		FROM `checkin`
		ORDER BY tgl ASC
	");
	while($data_tgl = $tgl->FetchRow()) {
	$dtgl = $data_tgl['tgl'];
	echo "<li><strong>$dtgl</strong></li>";
	echo "<ul>";
	
		$dcnt = $db->Execute("
			SELECT DISTINCT DATE_FORMAT(`check`, '%H') AS day
			FROM `checkin` 
			WHERE `check` LIKE '$dtgl%'
			ORDER BY DAY ASC
		");
		while($data_dcnt = $dcnt->FetchRow()) {
			$dday = $data_dcnt['day'];
			echo "<li>$dday:00";
			
				$jmlp = $db->Execute("
					SELECT COUNT(*) AS djml
					FROM `checkin`
					WHERE `check` LIKE '$dtgl $dday%'
					AND `status`=1
				");
				while($data_jmlp = $jmlp->FetchRow()) {
					echo "&nbsp;(".$data_jmlp['djml']." Pengunjung)";
				}
				
			echo "</li>";
		}
	echo "</ul>";
	}// EOF while($data_tgl = $tgl->FetchRow())
?>
</ul>
