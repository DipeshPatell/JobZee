<?php session_start();

	if($_SESSION["sid"]){
        ?>
        <?php
        }else  
        {
            header("location:SEEKER_LOGIN.php");
        }
$conn= mysqli_connect("localhost", "root", "","job_portal");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT * from job_seeker"; 
$i=0;
$result = mysqli_query($conn, $query) or die ( mysqli_error());
if(isset($_POST['submit'])){
	$name = $_POST['seeker_email'];  
	$password = $_POST['seeker_pass'];
$a=$row['seeker_id'];
					if(mysqli_num_rows($result)>0){
								while($row= mysqli_fetch_array($result)){
		if($name==$row["seeker_email"] && $password== $row["seeker_pass"]){
			$a=$row['seeker_id'];
			header("location:see_jobs.php?seekerid=$a");
																		}
			else{	
            $_SESSION["error"]="invalid email or password";
      
				header("location:SEEKER_LOGIN.php");	
												}
								$i++;}
}
}
?>