<?php 
session_start();
?>
<!DOCTYPE php>  
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
   <title>Provider Registration</title>
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
   <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
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
                                    <a class="nav-link" href="index.php" style=" color: white"><b>Home</b></a>
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
<form action="seeker_reg_db.php" method="post">  
  
<center> <h1 style="color: #00FFFF;  opacity:1.0"> Job Seeker Registration </h1> 
  <hr> </center>
<table><TR>
<?PHP

if(isset($_SESSION['passerrs'])){
echo $_SESSION['passerrs'];
} ?>
	 </tr>
<tr>
	<td>
			<label><b> Name <b></label>  
	</td>
	<td>
	
		<input type="text" name="seeker_name" placeholder= "Name" size="15" required value="<?php if(isset( $_SESSION['seeker_name'])){echo $_SESSION['seeker_name']; }?>" minlength="2"  pattern="[a-z A-Z]+"/>   
   </td>
   </tr>
  
<tr> 
<td>
<label> 
<b>  
Gender  </b> 
</label></td>
<td>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
</td>
  
</tr>
<tr>
<td>  
<label>  
<b> 
Phone  </b> 
</label>
</td>
<td>  
 
<input type="tel" name="phone" placeholder="phone no." size="10"/ required size="10" required  value="<?php if(isset( $_SESSION['seeker_phone'])){ echo $_SESSION['seeker_phone'];} ?>" minlength="10" maxlength="10" pattern="[6789][0-9]{9}">(Indian Phone Number)   
</td>
</tr>
<tr>
<td>

<label>   <b>
Aadhar no.  </b> 
</label></td>
<td>  
 
<input type="tel" name="Aadhar" placeholder="Aadhar no." size="10" required size="10" required  value="<?php if(isset( $_SESSION['seeker_aadhar'])){ echo $_SESSION['seeker_aadhar'];} ?>" minlength="12" maxlength="12" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}">   
 </td>
 </tr>
 <tr>
 <td>
 <b>
Current Address  </b></td>
<td>  
<textarea name="seeker_address" cols="75" rows="5"  required> 
<?php if(isset($_SESSION['seeker_address'])){echo $_SESSION['seeker_address'];} ?> 
</textarea>
</td>
</tr>
<tr>
<td>  
 <label for="email"><b>Email</b></label> </td>
<td> 
 <input type="email" placeholder="Enter Email" name="email" required value="<?php if(isset( $_SESSION['seeker_email'])){echo $_SESSION['seeker_email']; }?>">  
  </td>
  </tr>
  <tr>
  <td>
  
    <label for="psw"><b>Password</b></label>  
</td>

<td>   
   <input type="password" placeholder="Enter Password" name="psw" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">Atleast 8 char, 1 UpperCase, 1 LowerCase, 1 SpecialSymbol
  </td>
  </tr>
 
	<tr>
	<td>
	<button type="submit" class="registerbtn">Register</button>    
	</td>
	</tr>
	</table>
</form>  
</div>
</body>  
<?php session_destroy(); ?>
</html>  