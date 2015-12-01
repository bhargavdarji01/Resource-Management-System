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
		
		<form method="post" action="add1.php" name="temp" class="temp">
		<h1> To add a building: </h1>
		<p>Building name: <input type="text" name="bname" required/></p>
		
		<p>No. of floors: <select name="floor">
		<?php
		for($i=1;$i<10;$i++){
			echo "<option value=".$i.">".$i."</option>";
		 }
		 ?>
		 </select></p>
		 
		 <p>No. of rooms: <select name="room">
		<?php
		for($i=1;$i<10;$i++){
			echo "<option value=".$i.">".$i."</option>";
		 }
		 ?>
		 </select></p>
		
		<p><input type="reset" name="reset" value="Reset"/>
		<input type="submit" name="temp" value="Add" /></p>
		</form>
		</div>
	 </body>
	
	</div>
</html>
<?php
?>