<?php
session_start();
include("includes/verify_login.php");
include('includes/database.php');
?>
<html>
    <head>
	<title>Registration</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
 <script src="JavaScript/jquery.js"></script>
 
	</head>
	
	<div class="wrapper">
	<body>
	<?php include('includes/header.php'); ?>
				
		<div>
<?php

if(isset($_POST['temp']) && !empty($_POST['temp']))
{
if(isset($_POST['bname']) && isset($_POST['floor']))
	{
		$bname = $_POST['bname'];
		$floor = $_POST['floor'];
		$room = $_POST['room'];
		//echo $bname."-".$floor."-".$room;
		$sql_string = "insert into building (building_name,building_floor) values ('".$bname."','".$floor."')";
		$query_result = @mysql_query($sql_string,$dbconnect);
		  
			$last_id = mysql_insert_id();
		
		$add = "<strong><p>Building ".$bname." added successfully..!!! " . '<br/>';
		echo $add;
		?>
		<p><a href="listing.php"> <----back to home  </a><p>
		
		<?php
		
		
		$building = $bname;
		for ($i = 0; $i < $floor; $i++)
		{
			for ($j = 1; $j <= $room; $j++)
			{
					$Number = "0" . $j;
					$roomNumber = $building . $i . $Number;
				$sql = "insert into rooms (room_num,building_id,floor_number) values('".$roomNumber ."','". $last_id."','".$i."')";
				$query_result = @mysql_query($sql,$dbconnect);
				//echo $building . $i . $roomNumber . '<br/>';
				
			}
		}
	}
	else 
	{
		$error = "Please Enter Building name and No. of floors";
		echo $error;
	}
}	
	mysql_close();
?>