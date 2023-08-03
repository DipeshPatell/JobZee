<?php



$con= mysqli_connect("localhost","root","","job_portal");
//$id=$_REQUEST["job_provider_id"];
$query = "SELECT * from jobs where job_id = '".$_REQUEST['id']."'"; 
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
$job_title =$_REQUEST['job_title'];
$job_hours =$_REQUEST['job_hours'];
$job_category = $_REQUEST['job_category'];
$job_experience = $_REQUEST['job_experience'];
$job_city = $_REQUEST['job_city'];
$job_description = $_REQUEST['job_description'];
$update="update jobs set 
job_title='".$job_title."', 
job_hours='".$job_hours."',  job_category='".$job_category."', job_experience='".$job_experience."', job_city='".$job_city."', job_description='".$job_description."' where job_id='".$_REQUEST['id']."'";
mysqli_query($con, $update) or die(mysqli_error($con));
header("location:provider_profile.php");
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="job_provider_id" type="hidden" value="<?php echo $row['job_id'];?>" />
<p><input type="text" name="job_title" placeholder="Enter Name" 
required value="<?php echo $row['job_title'];?>" /></p>

<p><input type="text" name="job_hours" placeholder="Enter email " 
required value="<?php echo $row['job_hours'];?>" /></p>
<p><input type="text" name="job_category" placeholder="Enter password " 
required value="<?php echo $row['job_category'];?>" /></p>

<p><input type="text" name="job_experience" placeholder="Enter company name " 
required value="<?php echo $row['job_experience'];?>" /></p>

<p><input type="text" name="job_experience" placeholder="Enter address" 
required value="<?php echo $row['job_experience'];?>" /></p>

<p><input type="text" name="job_city" placeholder="Enter phohe" 
required value="<?php echo $row['job_city'];?>" /></p>
<p><textarea name="job_description"><?php echo $row['job_description'];?></textarea></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>