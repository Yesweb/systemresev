<?php
function getTableData($tableName, $page = 1, $limit = 20)
{
    $dataTable = array();
    $startRow = ($page - 1) * $limit;
    $query = mysql_query('
		SELECT * FROM `'.$tableName.'`
		LEFT JOIN member_stat
		ON member.status=member_stat.stat_code
		ORDER BY `member`.`id` DESC LIMIT '.$startRow.', '.$limit
	);
 
    while ($data = mysql_fetch_assoc($query)) 
        array_push($dataTable, $data);
 
    return $dataTable;
}
function showPagination($tableName, $limit = 20)
{
    $countTotalRow = mysql_query('SELECT COUNT(*) AS total FROM `'.$tableName.'`');
    $queryResult = mysql_fetch_assoc($countTotalRow);
    $totalRow = $queryResult['total'];
 
    $totalPage = ceil($totalRow / $limit);
 
    $page = 1;
    while ($page <= $totalPage) 
    {
        echo '<a href="?view=memberlist&page='.$page.'&perPage='.$limit.'">'.$page.'</a>';
        if ($page < $totalPage)
            echo " | ";
 
        $page++;
    }
}
?>