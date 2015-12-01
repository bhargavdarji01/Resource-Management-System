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
		
if(isset($_POST['submit']) && !empty($_POST['submit']))
{
if(isset($_POST['room_id']) && isset($_POST['room_type']))
	{
		$roomId = $_POST['room_id'];
		$roomType = $_POST['room_type'];
		$roomDesc = $_POST['room_desc'];
		$roomStatus = $_POST['room_status'];
		
		$sql_string = "update rooms set room_type='$roomType',room_desc='$roomDesc',room_status='$roomStatus' where room_id='$roomId' ";
		$query_result = @mysql_query($sql_string,$dbconnect);
		  
    echo "Room updated successfully...!!";
	?>
	<p><a href="listing.php"> <----back to home  </a></p>
	<?php
	}
}

?>
</body>
</div>
</html>
