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
	<?php include('includes/header.php'); 

	$rooms = "rooms";
	$building = "building";
	$sql_update = "select * from ".$building;
	$queryResult = @mysql_query($sql_update,$dbconnect);
	
		$data = array();
		$data1 = array();
		"<script>var array=[];</script>";
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		$data[$row["building_id"]]=$row["building_name"];
		$data1[$row["building_id"]]=$row["building_floor"];
	
	?>  
  

 <form method="post" action="get_resource_rooms.php" name="register" class="register">  
 
  <h1> To search resource for Room: </h1> </br></br>
  <div id=buildingList>
			select building:<select id="building_name"  name="building_name">
					<option value="0">Select</option>
					<?php
						foreach($data as $key=>$value )
						{
						echo "<option value=".$key.">".$value."</option>";
						}
					?>
							</select>
   </div>
		 <div id="floorList">
		 select floor: <select id="floor_num" name="floor_num">
		 
					<option value="1">--Select--</option>
					<?php
						foreach($data1 as $key=>$value )
						{
							if($key == "<script>myfunction();</script>")
							{
								echo "<option value=".$key.">".$value."</option>";
							}
						}
					?>
					</select>
		</div>
				<input type="submit" value="search" name="search"/> 
				<input type="button" value="test" onClick="myfunction();" name="test"/> 
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">


$("#building_name").on("change",function(){
	
	var bname = $(this).val();
	
	$.ajax({
		type: "POST",
		url: "includes/get_building_floors.php",
		data: {building_name:bname},
		success: function(data) {

			var ndata = jQuery.parseJSON(data);

			if(ndata['result'] == 'success')
			{

				$("#floor_num").html('');

				for (var i = 0; i < ndata['details'].length; i++) {

					var floor_val = '<option value="' + ndata['details'][i] + '">' + ndata['details'][i] + '</option>';

					$("#floor_num").append(floor_val);

				};

			}
			else
			{
				alert('No Records available in server');

			}

			
		}

	});

	
});


$("")



</script>

<?php
		}
mysql_close();
?>
