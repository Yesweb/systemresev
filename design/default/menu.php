	<ul>
		<li><a href="index.php">Home</a></li>
<?php
if ($cek_termstat == 1) {
	echo "<li><a href='index.php?view=check'><b>Checkin</b></a></li>";
} else if ($cek_termstat == 2) {
	echo "<li><a href='index.php?view=check'><b>Checkout</b></a></li>";
} else if ($cek_termstat == 3) {
	echo "<li><a href='index.php?view=check'><b>Checkin - Checkout</b></a></li>";
}
?>
	</ul>
	<!--<h3>Manage ID Card</h3>-->
	<ul>
<?php
$usrmn = $_SESSION['username'];
$qrymenu = $db->Execute("
	SELECT * 
	FROM  `menu` 
	LEFT JOIN  `user_menu` ON menu.id = user_menu.id_menu
	WHERE id_user_perm =  '$cek_termstat'
	ORDER BY  `orderby` ASC
	");
while($data_qrymenu = $qrymenu->FetchRow()) {
?>
		<li><a href="<?=$data_qrymenu['url']?>"><?=$data_qrymenu['title']?></a></li>
<?php
} //EOF while($data_qrymenu = $qrymenu->FetchRow())
?>
	</ul>
<?php
if ($cek_termstat == 3) {
?>
	<ul>
		<li><a href='index.php?view=user'>Manage User</a></li>
		<li><a href='index.php?view=group'>Manage Group</a></li>
	</ul>
<?php
} //EOF 
?>
	<ul>
		<li><a href="logout.php">Logout</a></li>
	</ul>