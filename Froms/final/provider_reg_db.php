<?php 
session_start();
	
$name= $_POST['provider_name'];
$company_name= $_POST['company_name'];
$phone= $_POST['phone'];
$address= $_POST['company_address'];
$email= $_POST['email'];
$password= $_POST['psw'];
$pass_repeat= $_POST['psw-repeat'];
$date=date("Y-m-d");
//$password = 'user-input-pass';

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
/*if(!preg_match('/^[0-9]{10}+$/', $phone))
	{
		$_SESSION['phoneerr']='<font color="red">invalid phone</font>';
	$_SESSION['provider_name']=$_POST['provider_name'];
	$_SESSION['company_name']=$_POST['company_name'];
	$_SESSION['phone']=$_POST['phone'];
	$_SESSION['company_address']=$_POST['company_address'];
	$_SESSION['email']=$_POST['email'];
	header("location:PROVIDER_REG.PHP");
	}*/

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
  //  echo '<font color="red">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</font>';
  $_SESSION['passerr']='<font color="red">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</font>';
  $_SESSION['provider_name']=$_POST['provider_name'];
	$_SESSION['company_name']=$_POST['company_name'];
	$_SESSION['phone']=$_POST['phone'];
	$_SESSION['company_address']=$_POST['company_address'];
	$_SESSION['email']=$_POST['email'];
  header("location:PROVIDER_REG.PHP");
}

	

//else{

$conn= mysqli_connect("localhost", "root", "","job_portal");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$query="INSERT INTO job_provider(	job_provider_name,	job_provider_phone,  	job_provider_address, 	job_provider_email, job_provider_pass, job_provider_cmp_name, reg_date) values('$name', $phone,  '$address', '$email', '$password', '$company_name', '$date')";
if (mysqli_query($conn, $query)) {
     header("location:provider_login.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//}
?>