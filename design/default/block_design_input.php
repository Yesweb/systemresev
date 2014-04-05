<!-- curl http://localhost/yesweb/systemreserv/?view=input&memberid=67890&term=900&termstat=1 -->
<?php
//SOF AUTH
include ("lib/back.php");
include ("application/app_set_param.php");
$author = $_SESSION['username'];
$memberid = $_GET['memberid'];
$terminal = $_GET['term'];
$terminalstat = $_GET['termstat'];
$sqlauth = $db->Execute("SELECT * FROM member WHERE memberid=$memberid");

if (!is_numeric($memberid)) {
	echo "<h4 style='text-align:center;'>$code99<br /><br />[ $back ]</h4>";
} else {

	while($data_auth = $sqlauth->FetchRow()) {
		$dauth = $data_auth['id'];
		$stat = $data_auth['status'];
	}
	if (empty($dauth)) {
		header("Location: index.php?view=91");
		exit;
	} else if ($stat == 0) {
		header("Location: index.php?view=92");
		exit;
	} else {
	?>
	<!--<h2><?=$memberid?></h2>-->
		<ul>
	<?php
		$member = $db->Execute("SELECT max(id) AS maxid FROM checkin WHERE memberid=$memberid");
		while($data_member = $member->FetchRow()) {
	?>
			<!--<li>ID: <?=$data_member['maxid'];?></li>-->
	<?php
			$dataid = $data_member['maxid'];
		} //while($data_member = $member->FetchRow())
	?>
		</ul>
		<ul>
	<?php
		if (!empty($dataid)) {
			$memberstat = $db->Execute("SELECT * FROM checkin WHERE id=$dataid");
			while($data_memberstat = $memberstat->FetchRow()) {
	?>
				<!--<li><?=$data_memberstat['check'];?> - <?=$data_memberstat['status'];?></li>-->
	<?php
				$stat = $data_memberstat['status'];
			} //EOF while($data_memberstat = $memberstat->FetchRow())
		} else {
			$stat = 0;
		} //EOF if !emty($dataid)
	?>
		</ul>
	<?php
		if ($stat == 1) {
			$inputstat = 2;
		} else if ($stat == 2) {
			$inputstat = 1;
		} else if ($stat == 0) {
			$inputstat = 1;
		}
	?>
	<?php
		$sqlinsert = "
			INSERT INTO `checkin` (`id`, `memberid`, `check`, `status`, `author`, `terminal`)
			VALUES (NULL, '$memberid', CURRENT_TIMESTAMP, '$inputstat', '$author', '$terminal')
		";
		if ($inputstat == 1 && $terminalstat == 2){
			echo "<h4 style='text-align:center;'>$code94</h4>";
			header("Location: index.php?view=94");
			exit;
		} else if ($inputstat == 2 && $terminalstat == 1){
			echo "<h4 style='text-align:center;'>$code95</h4>";
			header("Location: index.php?view=95");
			exit;
		} else if ($inputstat == 1 && $terminalstat == 1) {
			$db->Execute($sqlinsert);
			echo "<h4 style='text-align:center;'>$memberid<br />$code81</h4>";
			include ("design/".$_CONFIG['templ']['main']."/block_design_check.php");
		} else if ($inputstat == 2 && $terminalstat == 2) {
			$db->Execute($sqlinsert);
			echo "<h4 style='text-align:center;'>$memberid<br />$code82</h4>";
			include ("design/".$_CONFIG['templ']['main']."/block_design_check.php");
		} else if ($inputstat == 1 && $terminalstat == 3) {
			$db->Execute($sqlinsert);
			echo "<h4 style='text-align:center;'>$memberid<br />$code81</h4>";
			include ("design/".$_CONFIG['templ']['main']."/block_design_check.php");
		} else if ($inputstat == 2 && $terminalstat == 3) {
			$db->Execute($sqlinsert);
			echo "<h4 style='text-align:center;'>$memberid<br />$code82</h4>";
			include ("design/".$_CONFIG['templ']['main']."/block_design_check.php");
		} else {
			echo "<h4 style='text-align:center;'>$code96</h4>";
			header("Location: index.php?view=96");
			exit;
		}
	?>
	<?php
	} //EOF AUTH
	
} //EOF if (!is_numeric($memberid))
?>