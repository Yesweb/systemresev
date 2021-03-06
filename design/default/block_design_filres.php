<h3>Result</h3>
<?php
include_once("design/".$_CONFIG['templ']['main']."/block_design_filterform.php");

$idmember = $_POST['idmember'];
$check = $_POST['tanggal'];
$status = $_POST['status'];
$author = $_POST['author'];

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
$table = 'checkin';

// query yang akan diambil datanya
$tableQuery = "
	SELECT * FROM `checkin`
	LEFT JOIN status
	ON checkin.status=status.status
	LEFT JOIN terminal
	ON checkin.terminal=terminal.kodeterminal
	WHERE `memberid` LIKE '%$idmember%'
	AND `checkin`.`check` LIKE '%$check%'
	AND `checkin`.`status` LIKE '%$status%'
	AND `checkin`.`author` LIKE '%$author%'
	ORDER BY `checkin`.`id` DESC
	";
 
// ambil data
$dataTable = getTableData($tableQuery, $page, $dataPerPage);
 
// menampilkan tombol paginasi
showPagination($table, $dataPerPage); 
?>
<br /><br />
<table class="zebra-striped">
	<tr>
		<th>Nomor ID</th><th>Tanggal (Jam)</th><th>Status</th><th>Author</th><th>Terminal</th>
	</tr>
<?php
foreach ($dataTable as $i => $data) {
	$no = ($i + 1) + (($page - 1) * $dataPerPage);
?>
	<tr>
		<td><?=number_format($data['memberid'],0,",","-");?></td><td><?=date('d F Y (H:i:s)', strtotime($data['check']));?></td><td><?=$data['name'];?></td><td><?=$data['author'];?></td><td><?=$data['namaterminal'];?></td>
	</tr>
<?php
} //EOF foreach ($dataTable as $i => $data)
?>
</table>