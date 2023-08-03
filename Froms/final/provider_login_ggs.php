<?php
session_start();
$con=mysqli_connect("localhost","root","","job_portal");
$query = "SELECT * from job_provider"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
if(isset($_POST['submit'])){
	$name = $_POST['provideremail'];  
	$password = $_POST['provider_pwd'];

$row = mysqli_fetch_array($result);
	if($name==$row["job_provider_email"] && $password== $row["job_provider_pass"]){
			header("location:job_post.php");
				
				}
			else{	
				echo '<span style="color:#FF0000">invalid userr or password</span>';
				$_SESSION["error"]="invalid email or password";
				header("location:PROVIDER_LOGIN.php");
				
			}
			
	}		
	
?>