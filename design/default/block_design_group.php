<h2>Manage Group</h2>
<ul>
<?php
$qrygroup = $db->Execute("
	SELECT *
	FROM `user_permission`
	ORDER BY `id_perm` ASC
	");
while($data_qrygroup = $qrygroup->FetchRow()) {
?>
	<li>
<?php
	if ($data_qrygroup['id_perm'] == 1 or $data_qrygroup['id_perm'] == 2 or $data_qrygroup['id_perm'] == 3 or $data_qrygroup['id_perm'] == 4) {
		echo "<strong>[ Manage group menu ]</strong>";
	} else {
		$ig = $data_qrygroup['id_perm'];
		echo "<strong>[ <a href='index.php?view=groupmanage&ig=$ig'>Manage group menu</a> ]</strong>";
	}
?>
		- <?=$data_qrygroup['name']?>
	</li>
<?php
} //EOF while($data_qrygroup = $qrygroup->FetchRow())
?>
	<li><strong>[[ <a href='index.php?view=addgroup'>Add user group</a> ]]</strong></li>
</ul>