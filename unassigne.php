 <?php
 session_start();
	include("includes/verify_login.php");
	
	include('includes/database.php');

	$sql_update = "SELECT rm.room_id, rm.room_num, rs.res_id, rs.res_type from rooms rm join roomresources rmrs on rm.room_id = rmrs.room_id join resources rs on rmrs.res_id = rs.res_id";
	$queryResult = @mysql_query($sql_update,$dbconnect);
	?>
	
	
		<?php 
		$data = array();
		$data1 = array();
		
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		$data[$row["room_id"]]=$row["room_num"];
		$data1[$row["res_id"]]=$row["res_type"];
		
		}
  ?>  
  
<div class="wrapper">
				<?php include('includes/header.php'); ?>

 <form method="post" action="deleteRoomRes.php" name="register" class="register">  
 
  <h1> To unassign resource from Room: </h1> </br></br>
  <div id=buildingList>
			select Room:<select id="building_name"  name="room_id">
					<option value="0">Select</option>
					<?php
						foreach($data as $key=>$value )
						{
						echo "<option value=".$key.">".$value."</option>";
						}
					?>
							</select>
   </div>
		 <div id="floorList">
		 select Resource: <select id="floor_num" name="resId">
		 
					<option value="1">--Select1--</option>
					<?php
						foreach($data1 as $key=>$value )
						{
							
								echo "<option value=".$key.">".$value."</option>";
							
						}
					?>
					</select>
					</div>
				<input type="submit" value="Unassign" name="search"/> 
				
</form>


</div>



<?php
mysql_close();
?>