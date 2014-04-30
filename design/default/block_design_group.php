<h4>Manage Group</h4>
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
$table = 'user_permission';

// query yang akan diambil datanya
$tableQuery = "
	SELECT *
	FROM `user_permission`
	ORDER BY `id_perm` ASC
	";
 
// ambil data
$dataTable = getTableData($tableQuery, $page, $dataPerPage);
 
// menampilkan tombol paginasi
showPagination($table, $dataPerPage); 

?>
<br /><br />
<table class="zebra-striped">

<?php
foreach ($dataTable as $i => $data) {
	$no = ($i + 1) + (($page - 1) * $dataPerPage);
?>
	<tr>
		<td>
<?php
	if ($data['id_perm'] == 1 or $data['id_perm'] == 2 or $data['id_perm'] == 3 or $data['id_perm'] == 4) {
		echo "<strong>[ Manage group menu ]</strong>";
	} else {
		$ig = $data['id_perm'];
		echo "<strong>[ <a href='index.php?view=groupmanage&ig=$ig'>Manage group menu</a> ]</strong>";
	}
?>
		</td>
		<td>
			<?=$data['name']?>
		</td>
	</tr>
<?php
} //EOF foreach ($dataTable as $i => $data)
?>
	<tr>
		<td><strong>[[ <a href='index.php?view=addgroup'>Add user group</a> ]]</strong></td><td>&nbsp;</td>
	</tr>
</table>