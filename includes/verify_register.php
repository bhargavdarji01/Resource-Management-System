<?php
include('database.php');
$table_login = "user";
$display = true;
$error_check = 0; 
$error = array("username" => "","password"=>"","firstname"=>"","lastname"=>"","register"=>"");
$registered = 0; $username = ""; $firstname= ""; $lastname = ""; 

if(isset($_POST['register']) && !empty($_POST['register']))
{
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = $_POST['username'];
		$display = false;
		
	}
	else 
	{
		$error['username'] = "Please Enter User Name";
		$display = true;
		$error_check =1;
	}
	if(isset($_POST['password']) && !empty($_POST['password'])) 
	{
		$password = $_POST['password'];
		$display = false;
	}
	else
	{	
		$error['password'] = "Please Enter Password";
		$display = true;
		$error_check =1;
			
	}
	if(isset($_POST['firstname']) && !empty($_POST['firstname']))
	{
		$firstname = $_POST['firstname'];
		$display = false;
		
	}
	else 
	{
		$error['firstname'] = "Please Enter First Name";
		$display = true;
		$error_check =1;
	}
	if(isset($_POST['lastname']) && !empty($_POST['lastname']))
	{
		$lastname = $_POST['lastname'];
		$display = false;
	}
	else 
	{
		$error['lastname'] = "Please Enter Last Name";
		$display = true;
		$error_check =1;
	}
	
	}

	
	if(!$display AND $error_check == 0)
	{

		$sql_user = "select count(*) from ".$table_login." where username='".$username."'";
		$queryResult_user = @mysql_query($sql_user,$dbconnect);
        if($queryResult_user != FALSE)
        {
            $row_user = mysql_fetch_row($queryResult_user);
            if($row_user[0]>0)
                {
				$error['register'] .= "User Name ".$username." is already registered";
                ++$registered;
				$display = true;
                }
        }
		if($registered == 0 AND $display == false)
           {
	        $clien_id = mysql_insert_id($dbconnect);
            $sql_string = "insert into ".$table_login." (user_id,username,password,firstname,lastname) values('$clien_id','$username','".md5($password)."','$firstname','$lastname')";
			
			$query_result = @mysql_query($sql_string,$dbconnect);
           
            $success = "<strong><p>Thank You ".$firstname." ".$lastname." For Registering with Us!</br><br>Welcome to Lambton College Resource Management System..!!</br><br> Please <a href=\"listing.php\">Click Here</a> to Login.</br></p></strong>";
			mysql_close();
			
            
           }
		
    
    }
	
	



?>
