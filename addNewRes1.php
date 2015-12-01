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
	
if(isset($_POST['addNewRes']) && !empty($_POST['addNewRes']))
{
if(isset($_POST['resource']) && isset($_POST['resource']))
	{
		$resource = $_POST['resource'];
		
		$sql_string = "insert into resources(res_type) values ('".$resource."')";
		$query_result = @mysql_query($sql_string,$dbconnect);
		  
	$add = "<strong><p>New resource added successfully..!!! " . '<br/>';
		echo $add;
		?>
		<p><a href="listing.php"> <----back to home  </a><p>
		
	
	<?php
	}
}
?>
</body>
</div>
</html>