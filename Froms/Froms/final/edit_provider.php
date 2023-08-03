<?php

session_start();
	if($_SESSION["aid"]){
        ?>
        <?php
        }else  
        {
            header("location:ADMIN.php");
		}

$con= mysqli_connect("localhost","root","","job_portal");
//$id=$_REQUEST["job_provider_id"];
$query = "SELECT * from job_provider where job_provider_id = '".$_REQUEST['id']."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['job_provider_name'];
$email =$_REQUEST['job_provider_email'];
$pass = $_REQUEST['job_provider_pass'];
$cmp_name = $_REQUEST['job_provider_cmp_name'];
$address = $_REQUEST['job_provider_address'];
$phone = $_REQUEST['job_provider_phone'];
$update="update job_provider set 
job_provider_name='".$name."', job_provider_email='".$email."',
job_provider_pass='".$pass."',  job_provider_cmp_name='".$cmp_name."', job_provider_address='".$address."', job_provider_phone='".$phone."' where job_provider_id='".$_REQUEST['job_provider_id']."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="job_provider_id" type="hidden" value="<?php echo $row['job_provider_id'];?>" />
<p><input type="text" name="job_provider_name" placeholder="Enter Name" 
required value="<?php echo $row['job_provider_name'];?>" /></p>

<p><input type="text" name="job_provider_email" placeholder="Enter email " 
required value="<?php echo $row['job_provider_email'];?>" /></p>
<p><input type="text" name="job_provider_pass" placeholder="Enter password " 
required value="<?php echo $row['job_provider_pass'];?>" /></p>

<p><input type="text" name="job_provider_cmp_name" placeholder="Enter company name " 
required value="<?php echo $row['job_provider_cmp_name'];?>" /></p>

<p><input type="text" name="job_provider_address" placeholder="Enter address" 
required value="<?php echo $row['job_provider_address'];?>" /></p>

<p><input type="text" name="job_provider_phone" placeholder="Enter phohe" 
required value="<?php echo $row['job_provider_phone'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>