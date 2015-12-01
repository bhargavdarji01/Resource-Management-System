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
	
if(isset($_POST['addRes']) && !empty($_POST['addRes']))
{
if(isset($_POST['room_id']) && isset($_POST['res_id']) && isset($_POST['quantity']))
	{
		$roomId = $_POST['room_id'];
		$resId = $_POST['res_id'];
		$quantity = $_POST['quantity'];
		$sql_string = "insert into roomresources(room_id,res_id,no_of_res) values ('".$roomId."','".$resId."','".$quantity."')";
		$query_result = @mysql_query($sql_string,$dbconnect);
		  
	$add = "<strong><p>New resource added successfully..!!! " . '<br/>';
		echo $add;
		?>
		<p><a href="listing.php"> <----back to home  </a><p>
		
	
	<?php
	}
}
?>