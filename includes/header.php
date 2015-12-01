<html>
	<head>
		<title>Resource Management System - Login Page</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		<script src="JavaScript/jquery.js"></script>
	</head>
	<body>
		<?php 
			if(isset($_SESSION['user_info']))
			{
		?>
		<div id="header">
			<a class="clg" href=""><img src="images/clg.png" title="clg" /></a>
			<h1> Resource Management System </h1>
			<span class="welcome">Welcome <?php echo $_SESSION['user_info']['username']."!";?></span>
			<span class="logout"><a href="logout.php" title="Logout">Logout</a></span>
			<?php include("navigation.php"); ?>
		</div>
		<?php } 
			else {
		?>
		<div id="header">
			<a class="clg" href=""><img src="images/clg.png" title="clg" /></a>
			<h1> Resource Management System </h1>
			
			<div id="wrapper">
				<form method="post" action="listing.php" name="login" class="login_form">
				<p><span class="user">Username: <input type="text" name="username" value="<?php echo $username; ?>"/></span></p>
				<p><span class="user">Password: <input type="password" name="password" /></span></p>
				<p><span class="submit">   <input type="submit" name="login" value="Login"/></span></p>
				</form>
				<p><p/>
				<span>Or If you are a new user, Registered Please. <a href="register.php">Click Here</a> to Register </span>
			</div>
		</div>
		<?php } ?>
		<div class="error">
			<p><?php echo $error['username']; ?></p>
			<p><?php echo $error['password']; ?></p>
			<p><?php echo $error['login']; ?></p>
		</div>
	</body>
</html>