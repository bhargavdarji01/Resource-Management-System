
<?php
session_start();
	include("includes/verify_login.php");
	
	include('includes/database.php');
	
	?>
	<div class="wrapper">
				<?php 
				include('includes/header.php'); 
				
	$b_name = $_POST['building_name'];
	
	$sql_delete = "delete from building where building_id='".$b_name."'";
	$queryResult = @mysql_query($sql_delete,$dbconnect);
	
	echo "Building deleted successfully..!!";
	?>
	<p><a href="listing.php"> <----back to home  </a><p>
	</div>
	<?php
	mysql_close();
	?>