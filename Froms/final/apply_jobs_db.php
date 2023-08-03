<?php
session_start();

	$conn= mysqli_connect("localhost","root","","job_portal");
	$job_id=$_POST['jid'];
	
	$jobseekerid=$_POST['yid'];

	$resume=$_POST['resume'];
	$date=date("Y-m-d");
	$query="insert into response(job_id, seeker_id, resume, apply_date) values($job_id, $jobseekerid, '$resume', '$date')";

	
	
	if (mysqli_query($conn, $query)) {
      header("location:seeker_profile.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn); 
?>