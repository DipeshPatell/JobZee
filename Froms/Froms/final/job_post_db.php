<?php 
session_start();
$job_category= $_POST['job_category'];
$job_title= $_POST['job_title'];
$job_hours= $_POST['job_hours'];
$job_experiance= $_POST['job_months_experiane'];
$job_city= $_POST['job_location'];
$job_description= $_POST['job_description'];
$job_provider_id=$_SESSION['pid'];
$date=date("Y-m-d");
//echo $job_provider_id;


$conn= mysqli_connect("localhost", "root", "","job_portal");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$query="INSERT INTO jobs(job_category, job_title, job_hours, job_experience, job_city, job_description, job_provider_id, posted_date) values('$job_category', '$job_title', $job_hours, $job_experiance, '$job_city', '$job_description', $job_provider_id, '$date')";
//$query2="INSERT INTO response(job_provider_id)values($job_provider_id)";
//echo $query2;
//echo $query;
if (mysqli_query($conn, $query) ) {
	       
		header("location:provider_profile.php");
  
			
 }

 else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
} 
mysqli_close($conn);
?>