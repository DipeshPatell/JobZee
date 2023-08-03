<?php
$con= mysqli_connect("localhost","root","","job_portal");
//$id=$_REQUEST["job_provider_id"];
//$query1 = "SELECT * from job_provider where job_provider_id = '".$_REQUEST['id']."'"; 
//$result = mysqli_query($con, $query) or die ( mysqli_error());



$query= "DELETE FROM job_seeker WHERE seeker_id='" . $_REQUEST['id'] . "'";
 if(mysqli_query($con, $query) or die ( mysqli_error())){
	 echo "done";
 }

header("Location:seekeradmin.php");
?>