<h2>Log</h2><?phpinclude_once("design/".$_CONFIG['templ']['main']."/block_design_filterform.php");include_once('lib/pagination_log.php');// untuk mengetahui halaman keberapa yang sedang dibuka// juga untuk men-set nilai default ke halaman 1 jika tidak ada// data $_GET['page'] yang dikirimkan$page = 1;if (isset($_GET['page']) && !empty($_GET['page']))    $page = (int)$_GET['page']; // untuk mengetahui berapa banyak data yang akan ditampilkan// juga untuk men-set nilai default menjadi 10 jika tidak ada// data $_GET['perPage'] yang dikirimkan$dataPerPage = 10;if (isset($_GET['perPage']) && !empty($_GET['perPage']))    $dataPerPage = (int)$_GET['perPage']; // tabel yang akan diambil datanya$table = 'checkin'; // ambil data$dataTable = getTableData($table, $page, $dataPerPage); // menampilkan tombol paginasishowPagination($table, $dataPerPage); ?><br /><br />	<ul>		<li><strong>[Nomor ID]&nbsp; - &nbsp;[Tanggal]&nbsp;[Jam]&nbsp; - &nbsp;[Status]&nbsp; - &nbsp;[Author]&nbsp; - &nbsp;[Terminal]</strong></li><?phpforeach ($dataTable as $i => $data) {	$no = ($i + 1) + (($page - 1) * $dataPerPage);?>		<li><?=number_format($data['memberid'],0,",","-");?> - <?=$data['check'];?> - <?=$data['name'];?> - <?=$data['author'];?> - <?=$data['namaterminal'];?></li><?php} //EOF foreach ($dataTable as $i => $data)?>	</ul>