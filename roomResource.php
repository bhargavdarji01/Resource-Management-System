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
	$sql_update = "select * from rooms ";
	$queryResult = @mysql_query($sql_update,$dbconnect);
	
	$sql = "select * from resources";
	$Result = @mysql_query($sql,$dbconnect);
	
	
		$data = array();
		$data1 = array();
		
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		
		$data[$row["room_id"]]=$row["room_num"];

		}
		
		while(($row1 = mysql_fetch_assoc($Result))!== false)
		{
		
		$data1[$row1["res_id"]]=$row1["res_type"];
		
		
		}
		
  ?>  
  


 <form method="post" action="addResources.php" name="addRes" class="register">  
 
  <h1> To assign a resource to room: </h1> </br></br>
  <div id=buildingList>
			select Room:<select id="room_id"  name="room_id" required>
					<option value="">Select</option>
					<?php
						foreach($data as $key=>$value )
						{
						echo "<option value=".$key.">".$value."</option>";
						}
					?>
							</select>
   </div>
		 <div id="floorList">
		 select Resource: <select id="res_id" name="res_id" required>
		 
					<option value="">--Select--</option>
					<?php
						foreach($data1 as $key=>$value )
						{
								echo "<option value=".$key.">".$value."</option>";
						}
					?>
					</select>
					</div>
					No. of resources:<input type="text" name="quantity" required/>
				<input type="submit" value="ADD" name="addRes"/> 
</form>
</body>
</div>
</html>
