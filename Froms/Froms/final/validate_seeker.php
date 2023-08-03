<?php 

	$name = $_POST['seekerid'];  
$password = $_POST['seeker_pwd'];
$error = " ";
$success = " ";
if(isset($_POST['submit'])){
	if($name=="jrv"){
			if($password= "123"){
				$error=" ";
				$success="welcome";
				echo $success;
			}
			else{
				$error=" invalid  password ";
				$success=" ";
				echo $error;
				header('Location: SEEKER_LOGIN.php');
			}
			
	}		
	else{
		$error=" invalid  username ";
				$success=" ";
				echo $error;
				header('Location: SEEKER_LOGIN.php');
	}
}


	
?>
