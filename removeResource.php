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
	
	
	$sql = "select * from resources";
	$Result = @mysql_query($sql,$dbconnect);
	
	
		$data1 = array();
		
		while(($row1 = mysql_fetch_assoc($Result))!== false)
		{
		
		$data1[$row1["res_id"]]=$row1["res_type"];
		
		}
		
  ?>  
  


 <form method="post" action="removeResource1.php" name="removeResources" class="register">  
 
  <h1> To remove a resource: </h1> </br></br>
  
		 <div id="removeResources">
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
				<input type="submit" value="Remove" name="removeResources"/> 
</form>
</body>
</div>
</html>
