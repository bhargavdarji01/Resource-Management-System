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
				
		
	
	<?php
	
	$roomId = $_GET['roomId'];
	$sql = "SELECT rm.room_num, rm.room_type, rm.room_status, rm.room_desc, rs.res_type, rmrs.no_of_res from rooms rm join roomresources rmrs on rm.room_id = rmrs.room_id join resources rs on rmrs.res_id = rs.res_id where rm.room_id = '".$roomId."'";
	$Result = @mysql_query($sql,$dbconnect);
	if (mysql_num_rows($Result) > 0)
	{
	?>
	<table border="1">
			<tr>
				<td>Room Number</td>
				<td>Room Type</td>
				<td>Room Status</td>
				<td>Room Description</td>
				<td>Resource Type</td>
				<td>Number of Resources</td>
			</tr>
	<?php
		while($row1 = @mysql_fetch_assoc($Result)) 
		{
		?>
		
			<tr>
				<td><?php echo $row1['room_num'];?></td>
				<td><?php echo $row1['room_type'];?></td>
				<td><?php echo $row1['room_status'];?></td>
				<td><?php echo $row1['room_desc'];?></td>
				<td><?php echo $row1['res_type'];?></td>
				<td><?php echo $row1['no_of_res'];?></td>
			</tr>
		
		<?php
		}
	}
	else
	{
		echo "No Records Found...!!!";
	}
  ?>  
  </table>
</body>
</div>
</html>

