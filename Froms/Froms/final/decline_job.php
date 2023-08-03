<?php session_start();

 $con= mysqli_connect("localhost","root","","job_portal");
 $query= "update response set status=2 where seeker_id='" . $_REQUEST['id'] . "'";
 if(mysqli_query($con, $query) or die ( mysqli_error())){
	 echo "done";
 }

header("Location:provider_profile.php");
?>
