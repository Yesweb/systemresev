<h4 style="text-align:center;">Manage User</h4>
<?php
//untuk menampilkan URL utama
function baseurl() {
	$act = $_GET['view']; //setting disini
	$baseurl = "index.php?view=$act"; //setting disini
	return $baseurl;
}
include_once('lib/pagination.php');
// untuk mengetahui halaman keberapa yang sedang dibuka
// juga untuk men-set nilai default ke halaman 1 jika tidak ada
// data $_GET['page'] yang dikirimkan
$page = 1;
if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];
 
// untuk mengetahui berapa banyak data yang akan ditampilkan
// juga untuk men-set nilai default menjadi 10 jika tidak ada
// data $_GET['perPage'] yang dikirimkan
$dataPerPage = 10;
if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];
 
// tabel yang akan dipaginasi
$table = 'user';

// query yang akan diambil datanya
$tableQuery = "
	SELECT *
	FROM `user`
	LEFT JOIN `user_permission`
	ON user.permit = user_permission.id_perm
	";
 
// ambil data
$dataTable = getTableData($tableQuery, $page, $dataPerPage);
 
// menampilkan tombol paginasi
showPagination($table, $dataPerPage); 

?>

<table align="center">
	<tr align="center">
		<td><b>User Name</b></td><td width="30">&nbsp;</td><td><b>Group</b></td>
	</tr>

<?php
foreach ($dataTable as $i => $data) {
	$no = ($i + 1) + (($page - 1) * $dataPerPage);
?>
	<tr>
		<td><?=$data['username']?></td><td>&nbsp;</td><td><?=$data['name']?></td>
	</tr>
<?php
} //EOF foreach ($dataTable as $i => $data)
?>

	<tr align="center">
		<td><b>[ <a href="index.php?view=adduser">Add User</a> ]</b></td><td>&nbsp;</td><td><b>[ <a href="index.php?view=group">Manage Group</a> ]</b></td>
	</tr>
</table>