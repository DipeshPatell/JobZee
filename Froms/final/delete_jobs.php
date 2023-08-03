<?php
$con= mysqli_connect("localhost","root","","job_portal");
//$id=$_REQUEST["job_provider_id"];
$query1 = "SELECT * from jobs where job_id = '".$_REQUEST['id']."'"; 
//$result = mysqli_query($con, $query) or die ( mysqli_error());



$query= "DELETE FROM jobs WHERE job_id='" . $_REQUEST['id'] . "'";
 if(mysqli_query($con, $query) or die ( mysqli_error())){
	 echo "done";
 }

//header("Location:index.php");
?>