<?php session_start();
 $con= mysqli_connect("localhost","root","","job_portal");
 $query= "update response set status=1 where seeker_id='" . $_REQUEST['id'] . "'";
 if(mysqli_query($con, $query) or die ( mysqli_error())){
	 echo "done";
 }
$_SESSION['seeker_ida']=$_REQUEST['id'];
unset($_SESSION['seeker_idd']);
header("Location:provider_profile.php");
?>
