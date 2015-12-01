 <?php
session_start();
include("includes/verify_login.php");
include('includes/database.php');
?>
<html>
    <head>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
 <script src="JavaScript/jquery.js"></script>
 
	</head>
	
	
	<div class="wrapper">
	<body>
	<?php include('includes/header.php'); 

 $roomId = $_GET['id'];

$sql_string = "update rooms set room_status='N',room_type='',room_desc='' where room_id='$roomId' ";
		$query_result = @mysql_query($sql_string,$dbconnect);
		
			echo "Room deactivated ";
			
		?>
		<p><a href="listing.php"> <----back to home  </a><p>

	</body>
	</div>
	</html>