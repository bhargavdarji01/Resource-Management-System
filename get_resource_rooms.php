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


	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript">
function clickfunction(id)
{
	var roomId = id;
	//alert(roomId);
	$.ajax({
		type: "POST",
		url: "updateResources.php",
		data: {resoureceId:id},
		success: function(data) {

			var ndata = jQuery.parseJSON(data);

			if(ndata['result'] == 'success')
			{
		    }
				var add = "<input type='submit' name='submit' value='Update'/></br>";
					$("#result").append(add);
				
				}
			else
			{
				alert('No Records available in server');

			}

			
		}

	});

	
}

</script>

<?php

	$b_name = $_POST['building_name'];
	$b_floor = $_POST['floor_num'];
	
	$sql_search = "select * from rooms where building_id='".$b_name."' and floor_Number='".$b_floor."'" ;
	$queryResult = @mysql_query($sql_search,$dbconnect);
	
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		 echo   "Room Number: " .$row["room_num"]."&nbsp;&nbsp;&nbsp;&nbsp;";    
 ?>
		 </n><input type="button" onclick="clickfunction(<?php echo $row["room_id"];?>);" value="Show Resources" name="update"/> &nbsp; &nbsp;&nbsp;&nbsp;
<?php
		}
		mysql_close();
?>

<form name="updateResources" action="updateResources.php" method="post">
<div id="result">
</div>
</form>
</body>
</div>
</html>