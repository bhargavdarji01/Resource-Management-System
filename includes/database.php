<?php

$dbname = "project";

$dbconnect = @mysql_connect('localhost','root','');

if($dbconnect === false)
{

echo "<p> connection Error:". mysql_error()."</p> \n";

}


if(@mysql_select_db($dbname,$dbconnect) === false) 
	{
		echo "could not connect to database ".$dbname." database: ".mysql_error($dbconnect)."</p>\n";
		mysql_close($dbconnect);
		$dbconnect = false;
		
	}
/*
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  else { 
  echo 'here';
  exit();
  }
*/
?>