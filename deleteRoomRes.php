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
	<?php include('includes/header.php');
				
	$roomId = $_POST['room_id'];
	$resId = $_POST['resId'];
	$sql="delete from roomresources where room_id=$roomId and res_id = $resId";
	$queryResult = @mysql_query($sql,$dbconnect);
	
	
	$add = "<strong><p>Resource unassigned successfully..!!! </P></strong>" . '<br/>';
	echo $add;?>
	<p><a href="listing.php"> <----back to home  </a><p>
	
</body>
</div>
</html>	
	