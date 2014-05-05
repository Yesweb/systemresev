<h3>Add User</h3>
<hr>
<form class="skeleton" name="adduser" action="index.php?view=adduserinsert" method="post">
	<label for="regularInput">Username</label><input type="text"  name="addusername" id="regularInput" />
	<label for="regularInput">User Group</label>
	<select name="addgroup" style="width:210px;">
<?php
$qrygroup = $db->Execute("
	SELECT *
	FROM `user_permission`
	ORDER BY `id_perm` ASC
	");
while($data_qrygroup = $qrygroup->FetchRow()) {
?>
		<option value="<?=$data_qrygroup['id_perm']?>"><?=$data_qrygroup['name']?></option>
<?php
} //EOF while($data_qrygroup = $qrygroup->FetchRow())
?>
	</select>
	<label for="regularInput">Password</label><input type="password" name="addpassword" id="regularInput" />
	<button type="submit" style="width:210px;">Submit</button>
</form>