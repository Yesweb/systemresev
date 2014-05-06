<h3>Manage Group Menu</h3>
<hr>
<ul>
<?php
$group = $_GET['ig'];
$qrygm = $db->Execute("
	SELECT * FROM `user_menu`
	LEFT JOIN `menu`
	ON user_menu.id_menu=menu.id
	WHERE id_user_perm=$group
	");
while($data_qrygm = $qrygm->FetchRow()) {
?>
	<li><?=$data_qrygm['title']?></li>
<?php
} //EOF while($data_qrygm = $qrygm->FetchRow())
?>
</ul>
<form class="content" name="menuadd" action="index.php?view=menuadd" method="post">
	<input type="hidden" name="idperm" value="<?=$group?>">
	<select name="menu">
		<option value="">Add Menu</option>
<?php
$qrymn = $db->Execute("
	SELECT * FROM `menu`
	ORDER BY `orderby` ASC
	");
while($data_qrymn = $qrymn->FetchRow()) {
?>
		<option value="<?=$data_qrymn['id']?>"><?=$data_qrymn['title']?></option>
<?php
} //EOF while($data_qrymn = $qrymn->FetchRow())
?>
	</select>
	<button type="submit">Submit</button>
</form>