<h2>ID CARD</h2><h4>Search</h4><form name="searchid" action="" method="get">	<input type="hidden" name="view" value="history">	<input type="text" id="focus" name="id" value="">	<button type="submit">Search</button></form><h4>Rekapitulasi</h4><?phpinclude_once('lib/pagination_member.php');// untuk mengetahui halaman keberapa yang sedang dibuka// juga untuk men-set nilai default ke halaman 1 jika tidak ada// data $_GET['page'] yang dikirimkan$page = 1;if (isset($_GET['page']) && !empty($_GET['page']))    $page = (int)$_GET['page']; // untuk mengetahui berapa banyak data yang akan ditampilkan// juga untuk men-set nilai default menjadi 10 jika tidak ada// data $_GET['perPage'] yang dikirimkan$dataPerPage = 10;if (isset($_GET['perPage']) && !empty($_GET['perPage']))    $dataPerPage = (int)$_GET['perPage']; // tabel yang akan diambil datanya$table = 'member'; // ambil data$dataTable = getTableData($table, $page, $dataPerPage); // menampilkan tombol paginasishowPagination($table, $dataPerPage); ?><br /><br /><ul>	<li><strong>[Action]&nbsp; - &nbsp;[Nomor ID]&nbsp; - &nbsp;[Status]&nbsp; - &nbsp;[Register Author]</strong></li><?phpforeach ($dataTable as $i => $data) {	$no = ($i + 1) + (($page - 1) * $dataPerPage);?>	<li><strong>[ <a href="index.php?view=history&id=<?=$data['memberid'];?>">History</a> ]</strong>&nbsp; - &nbsp;<?=number_format($data['memberid'],0,",","-");?>&nbsp; - &nbsp;<?=$data['stat_name'];?>&nbsp; - &nbsp;<?=$data['reg_auth'];?></li><?php} //EOF foreach ($dataTable as $i => $data)?></ul>