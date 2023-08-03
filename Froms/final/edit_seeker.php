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
$query = "SELECT * from job_seeker"; 
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
$name =$_REQUEST['seeker_name'];
$email =$_REQUEST['seeker_email'];
$pass = $_REQUEST['seeker_pass'];
$gender = $_REQUEST['seeker_gender'];
$address = $_REQUEST['seeker_address'];
$phone = $_REQUEST['seeker_phone'];
$aadhar=$_REQUEST['seeker_aadhar'];
$update="update job_seeker set 
seeker_name='".$name."', seeker_email='".$email."',
seeker_pass='".$pass."',  seeker_gender='".$gender."', seeker_address='".$address."', seeker_phone='".$phone."', seeker_aadhar='".$aadhar."' where seeker_id='".$_REQUEST['seeker_id']."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="seeker_id" type="hidden" value="<?php echo $row['seeker_id'];?>" />

<p><input type="text" name="seeker_name" placeholder="Enter Name" 
required value="<?php echo $row['seeker_name'];?>" /></p>

<p><input type="text" name="seeker_email" placeholder="Enter email " 
required value="<?php echo $row['seeker_email'];?>" /></p>

<p><input type="text" name="seeker_pass" placeholder="Enter password " 
required value="<?php echo $row['seeker_pass'];?>" /></p>

<p><textarea name="seeker_address" 
required ><?php echo $row['seeker_address'];?> </textarea></p>

<p><input type="number" name="seeker_aadhar" placeholder="Enter address" 
required value="<?php echo $row['seeker_aadhar'];?>" /></p>

<p><input type="number" name="seeker_phone" placeholder="Enter phohe" 
required value="<?php echo $row['seeker_phone'];?>" /></p>

<p><input type="text" name="seeker_gender" placeholder="Enter gender" 
required value="<?php echo $row['seeker_gender'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>