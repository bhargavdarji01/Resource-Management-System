<?php

$roomId = $_POST['roomId'];


require_once('database.php');



$result = mysql_query("SELECT * FROM resources WHERE room_id = $roomId");


$floor_dt = array();

if (!$result) {
    echo json_encode(array('result' => 'error'));
}else{
	$row = mysql_fetch_assoc($result);
	/*while($row = mysql_fetch_assoc($result)){
     
     $floor_dt[] = $row['floor_Number'];
	}
    */

    echo json_encode(array('result' => 'success','details' => $row));
}



?>