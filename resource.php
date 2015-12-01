<?php

session_start();
include("includes/verify_login.php");
include("includes/database.php");
?>
<html>
    <head>
	<title>Registration</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" />
 <script src="../JavaScript/jquery.js"></script>
 
	</head>
	
	
	<body class="wrapper"> 
	<?php include('includes/header.php'); 
				
	$sql_update = "select rrs.roomres_id, rrs.no_of_res, rm.room_num, re.res_type from roomresources as rrs join rooms as rm on rrs.room_id = rm.room_id join resources as re on rrs.res_id = re.res_id";
	$queryResult = @mysql_query($sql_update,$dbconnect);
	?>
		<table>
		<tr><td>Room Number</td><td>Resourse Type</td><td>Total Resourses</td><td></td></tr>
				<?php
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{?>
			<tr>
				<td><?php echo $row['room_num'];?></td>
				<td><?php echo $row['res_type'];?></td>
				<td><?php echo $row['no_of_res'];?></td>
				<td><input type='button' value='remove' name='remove' onClick="document.location.href='includes/removeRoomRes.php?id=<?php echo $row['roomres_id'];?>'"/></td>
				</tr>
				<?php
		}?>
		 </table>
       
	   </body>
	   </html>
  
