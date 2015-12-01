 <?php
	session_start();
	include("includes/verify_login.php");
 ?>
 <html>
 <head>
 <title>Resource management system</title>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <script src="JavaScript/jquery.js"></script>
 </head>
	<body>
	<div class="wrapper">
				<?php include('includes/header.php');
		if(isset($_SESSION['user_info'])){
		?>
		<h2>Welcome to resource management system of Lambton college.</h2>
		<a class="clg" href=""> <img src="images/lambton.jpg" style="width:800px;height:500px;" /> </a>
		<?php } ?>
	</div>
	</body> 
 </html>