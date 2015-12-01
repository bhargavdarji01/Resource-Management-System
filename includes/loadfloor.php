<?php 
$stateId   = $_GET['country'];
?>
<select name="city">
<option>Select  <?php echo $stateId?></option>
<option value=<?php echo $stateId?>><?php echo $stateId?></option>
</select>