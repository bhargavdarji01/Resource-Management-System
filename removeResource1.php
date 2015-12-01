
<?php
session_start();
	include("includes/verify_login.php");
	
	include('includes/database.php');
	
	?>
	<div class="wrapper">
				<?php 
				include('includes/header.php'); 
				
	$res_id = $_POST['res_id'];
	
	$sql_delete = "delete from resources where res_id='".$res_id."'";
	$queryResult = @mysql_query($sql_delete,$dbconnect);
	
	echo "Resource deleted successfully..!!";
	
	
	?>
	<p><a href="listing.php"> <----back to home  </a><p>
	</div>
	<?php
	mysql_close();
	?>