<h3>Manage Group Menu</h3>
<hr>
<table class="zebra-striped">
	<tr>
		<th>Action</th><th>Menu</th>
	</tr>
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
	<tr>
		<td>Delete</td><td><?=$data_qrygm['title']?></td>
	</tr>
<?php
} //EOF while($data_qrygm = $qrygm->FetchRow())
?>
</table>
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