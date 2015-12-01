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
	<?php include('includes/header.php');?>


 <form method="post" action="addNewRes1.php" name="addNewRes" class="register">  
 
  <h1> Add new resource into system: </h1> </br></br>
  <div id=buildingList>
			Resource name: <input type="text" name="resource" required/>
				<input type="submit" value="Add Resource" name="addNewRes"/> 
</form>
</body>
</div>
</html>
