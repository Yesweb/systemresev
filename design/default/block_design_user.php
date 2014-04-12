<h4 style="text-align:center;">Manage User</h4>
<table align="center">
	<tr align="center">
		<td><b>User Name</b></td><td width="30">&nbsp;</td><td><b>Group</b></td>
	</tr>
<?php
$qryuser = $db->Execute("
	SELECT *
	FROM `user`
	LEFT JOIN `user_permission`
	ON user.permit = user_permission.id_perm
	");
while($data_qryuser = $qryuser->FetchRow()) {
?>
	<tr>
		<td><?=$data_qryuser['username']?></td><td>&nbsp;</td><td><?=$data_qryuser['name']?></td>
	</tr>
<?php
}
?>
	<tr align="center">
		<td><b>[ <a href="#">Add User</a> ]</b></td><td>&nbsp;</td><td><b>[ <a href="#">Manage Group</a> ]</b></td>
	</tr>
</table>