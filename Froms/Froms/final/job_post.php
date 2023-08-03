<?php
session_start();
	if($_SESSION["pid"]){
        ?>
        <?php
        }else  
        {
            header("location:PROVIDER_LOGIN.php");
		}
  ?>
  
	
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-image: url("slider_img.png");
  background-size: cover;
				background-position: center;
  
}  

  

hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
  }
  .login_box{
	  margin-top: 100px;
		position: absolute;
		top: 60%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 700px;
		height: 550px;
		padding: 60px 20px;
		box-sizing: border-box;
		background:rgba(0,0,0,0.5);
  .login_box input[type="submit"]
{
	border:none;
	outline:none;
	width: 100%;
	height:30px;
	color: #fff;
	font-size: 16px;
	background: rgb(0,128,0);
	cursor: pointer;
	border-radius: 20px;
	padding: 5px;
	font-size:20px;
	cursor:pointer;
	margin:12px 0;
	
	
}
.login_box input[type="submit"]: hover
{
	background: #efed40;
	color: #262626;
}

  
</style>  
<!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>post a job</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]--> 
</head>  
<body>  
<header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu" >
                              <ul class="navbar-nav">
							  <li class="nav-item active">
                                    <a class="nav-link" href="logout_p.php" style=" color: white"><b>Log out</b></a> 
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style=" color: white"><b>Home</b></a>
                                 </li>
								 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="provider_profile.php" style=" color: white"><b>My profile</b></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.php" style=" color: white"><b>About</b></a>
                                 </li>
                               
                                 
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.php" style=" color: white"><b>Contact Us</b></a>
                                 </li>
                                 
                              </ul>
                            
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

      </header>
<div class="login_box">
<form action="job_post_db.php" method="post">  
  
<center> <h1 style="color: #00FFFF;  opacity:1.0"> Job post </h1> 
  <hr> </center>
<table>
<tr>
	<td>
			<label><b>Job Title  <b></label>  
	</td>
	<td>
	
		<input type="text" name="job_title" placeholder= "Enter Job Title"  required />   
   </td>
   </tr>
  
<tr> 

<td>  
<label><b>Job Category  <b></label>
   
</td>
<td>
<select name="job_category">
	<option value="Business Development Manager">Business Development Manager</option>
	
	<option value="Business Analyst">Business Analyst</option>
	
	<option value="Human Resource Manager">Human Resource Manager</option>
	
	<option value="Project Manager">Project Manager</option>
	
	<option value=" Management Consultant"> Management Consultant</option>
	
	<option value="Marketing Manager">Marketing Manager</option>
	
	<option value="Accounting Consultant">Accounting Consultant</option>
	
	<option value="Digital Marketing Strategist">Digital Marketing Strategist</option>
	
	<option value="Operations Manager">Operations Manager</option>
	
	<option value="Sales Operations Analyst">Sales Operations Analyst</option>

</td>
  
</tr>
<tr>
<td>  
<label>  
<b> 
Job Loation : </b> 
</label>
</td>
<td>  
 
<select name="job_location">
	<option value="Ahmedabad">Ahmedabad</option>
	
	<option value="Surat">Surat</option>
	
	<option value="Rajkot">Rajkot</option>
	
	
</td>
</tr>
<tr>
<td>

<label>   <b>
Job Experiance Required : </b> 
</label></td>
<td>
 
Month(s):
<select name="job_months_experiane">
	<option value="0">0</option>
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option><option value="7">7</option><option value="8">8</option>
 </td>
 </tr>
 <tr>
 <td>
 <b>
Job Hours : </b></td>
<td>  
<select name="job_hours">
	<option value="0">0</option>
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option><option value="7">7</option><option value="8">8</option>
</td>
</tr>
<tr>
	<td>
			<label><b>Job Description: <b></label>  
	</td>
	<td>
	
		<textarea name="job_description" required></textarea>
   </td>
   </tr>
<tr>
<<td><button type="submit" class="registerbtn">post job</button> </td>

	</table>
</form>  
</div>
</body>  
</html>  