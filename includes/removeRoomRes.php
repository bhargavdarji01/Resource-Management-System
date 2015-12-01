<?php
include('database.php');
$roomResId = $_GET['id'];
$sql_update = "delete from roomresources where roomres_id=$roomResId";
	$queryResult = @mysql_query($sql_update,$dbconnect);
	echo "deleted";
?>