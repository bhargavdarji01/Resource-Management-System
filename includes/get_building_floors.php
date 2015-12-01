<?php

$building_name = $_POST['building_name'];


require_once('database.php');



$result = mysql_query("SELECT * FROM rooms WHERE building_id = $building_name group by floor_number");


$floor_dt = array();

if (!$result) {
    echo json_encode(array('result' => 'error'));
}else{
	
	while($row = mysql_fetch_assoc($result)){
     
     $floor_dt[] = $row['floor_Number'];

    }

    echo json_encode(array('result' => 'success','details' => $floor_dt));


}

?>