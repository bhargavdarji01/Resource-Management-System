 <?php
 session_start();
	include("includes/verify_login.php");
	
	include('includes/database.php');

	$sql_update = "select * from building";
	$queryResult = @mysql_query($sql_update,$dbconnect);
	?>
	
	
<div class="wrapper">
				<?php include('includes/header.php'); ?>

 <form method="post" action="removebuilding1.php" name="removeBuilding" class="removeBuilding">  
 
  <h1> To Delete a building : </h1> </br></br>
	<?php 
		$data = array();
		
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		$data[$row["building_id"]]=$row["building_name"];
		}
	?>  
  
  <div id=buildingList>
			select building:<select id="building_name"  name="building_name">
					<option value="0">Select</option>
					<?php
						foreach($data as $key=>$value )
						{
						echo "<option value=".$key.">".$value."</option>";
						}
					?>
							</select>
   </div>
   
<input type="submit" value="remove" name="remove"/> 
</form>
</div>
