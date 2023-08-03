<?php 
$name= $_POST['seeker_name'];
$gender= $_POST['gender'];
$phone= $_POST['phone'];
$aadhar= $_POST['Aadhar'];
$email= $_POST['email'];
$password= $_POST['psw'];
$address= $_POST['seeker_address'];
$date=date("Y-m-d");


//Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
  
  $_SESSION['passerrs']='<font color="red">Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</font>';
   $_SESSION['seeker_name']=$_POST['provider_name'];
	$_SESSION['seeker_phone']=$_POST['phone'];
	$_SESSION['seeker_aadhar']=$_POST['Aadhar'];
	$_SESSION['seeker_email']=$_POST['email'];
	$_SESSION['seeker_address']=$_POST['seeker_address'];
  header("location:SEEKER_REG.PHP");
}
else{


$conn= mysqli_connect("localhost", "root", "","job_portal");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$query="INSERT INTO job_seeker(seeker_name, seeker_gender, seeker_phone, seeker_aadhar, seeker_address, seeker_email, seeker_pass, reg_date) values('$name', '$gender', $phone, $aadhar, '$address', '$email', '$password', '$date')";
//echo $query;
if (mysqli_query($conn, $query)) {
      header("location:seeker_login.php");
} else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}

?>
