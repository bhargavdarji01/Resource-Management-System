
<?php
include ("includes/verify_register.php");
?>

<html>
    <head>
	<title>Registration</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	
	
	<div class="wrapper">
	<?php if ($display || $error_check == 1) {?>
		<div id="header">
		<a class="clg" href=""><img src="images/clg.png" title="clg" /></a>
		</div>
		<div>
		<h1> Resource Management System </h1>
		<span class="reg_fnt">Registration Form</span>
		
		<form method="post" action="register.php" name="register" class="register">
		<p>Username: <input type="text" name="username" value="<?php echo $username;?>" /></p>
		<div class="errors"><?php echo $error['username'];?></div>
		<p>Passowrd: <input type="password" name="password" /></p>
		<div class="errors"><?php echo $error['password'];?></div>
		<p>First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>" /></p>
		<div class="errors"><?php echo $error['firstname'];?></div>
		<p>Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>" /></p>
		<div class="errors"><?php echo $error['lastname'];?></div>
	
		<div class="errors"><?php echo $error['register'];?></div>
		<p><input type="reset" name="reset" value="Reset"/>   <input type="submit" name="register" value="Register"/></p>
		</form>
		<span>Or If Already Registered Please <a href="listing.php">Click Here</a> to Login </span>
		</div>
	
	<?php }
		else 
		{ ?>
	     <div id="header">
		<a class="clg" href=""><img src="images/clg.png" title="clg" /></a>
		</div>
		
		<?php 
		echo $success;
		}?>	
		
		

</html>