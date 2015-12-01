<?php
 session_start();
	include("includes/verify_login.php");
	include('includes/database.php');  ?>
	<html>
	<head>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript">
function clickfunction(id)
{
	var roomId = id;
	//alert(roomId);
	$.ajax({
		type: "POST",
		url: "includes/get_update_room.php",
		data: {roomId:id},
		success: function(data) {

			var ndata = jQuery.parseJSON(data);

			if(ndata['result'] == 'success')
			{
				var arrayData = ndata['details'];
				$("#result").html('');
				
				for(var k in arrayData){
					if(k=="room_id"){
						var add = "<input type='hidden' name='"+k+"' value='"+arrayData[k]+"'/></br>";
						$("#result").append(add);
					}
					else{
					if(k!="building_id" && k!="floor_Number"){
						if(k=="room_num"){
							var add = "<lable>"+k+":</lable>&nbsp<lable>"+arrayData[k]+"</lable></br>";
						}
						else if(k=="room_status"){
							var add = "<lable>"+k+":</lable>&nbsp";
							add += "<input type='radio' name='"+k+"' checked value='"+arrayData[k]+"'>"+arrayData[k]+"";
							if(arrayData[k] == "Y"){
							add += "<input type='radio' name='"+k+"' value='N'>N<br>";
							}
							else{
								add += "<input type='radio' name='"+k+"' value='Y'>Y<br>";
							}
						}
						else if(k=="room_type"){
							var add = "<lable>"+k+":</lable>&nbsp<input type='text' name='"+k+"' value='"+arrayData[k]+"'required/></br>";
						}
						else{
					var add = "<lable>"+k+":</lable>&nbsp<input type='text' name='"+k+"' value='"+arrayData[k]+"'/></br>";
						}
					$("#result").append(add);
					}
					}
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
</head>
<div class="wrapper">
<body>
<?php include('includes/header.php'); ?>
<?php

	$b_name = $_POST['building_name'];
	$b_floor = $_POST['floor_num'];
	
	$sql_search = "select * from rooms where building_id='".$b_name."' and floor_Number='".$b_floor."'" ;
	$queryResult = @mysql_query($sql_search,$dbconnect);
	
		while(($row = mysql_fetch_assoc($queryResult))!== false)
		{
		 echo   "Room Number: " .$row["room_num"]."&nbsp;&nbsp;&nbsp;&nbsp;";    
		 echo   "Room Type: " .$row["room_type"]. "&nbsp;&nbsp;&nbsp;&nbsp;";
		 echo   "Room Status: " .$row["room_status"]. "&nbsp;&nbsp;&nbsp;&nbsp;";
		 echo   "Room description: " .$row["room_desc"]. "&nbsp;&nbsp;&nbsp;&nbsp;";
 ?>
		 </n><input type="button" onclick="clickfunction(<?php echo $row["room_id"];?>);" value="Edit" name="update"/> &nbsp; &nbsp;&nbsp;&nbsp;
		 <input type="button" value="Remove" onClick="document.location.href='<?php echo 'removeRoom.php?id='.$row["room_id"]?>'" name="remove"/><span id="<?php echo $row["room_id"];?>"></span> &nbsp;&nbsp;&nbsp;
		  <input type="button" value="Summary" onClick="document.location.href='<?php echo 'roomSummary.php?roomId='.$row["room_id"]?>'" name="remove"/><span id="<?php echo $row["room_id"];?>"></span></br> </br>
<?php
		}
		mysql_close();
?>

<form name="updateRoom" action="updateRoom.php" method="post">
<div id="result">
</div>
</form>
</body>
</div>
</html>