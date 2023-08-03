<?php
session_start();
if(count($_POST)>0){
	$conn= mysqli_connect("localhost", "root", "","job_portal");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
	}
	$email=$_POST['provideremail'];
	$pass=$_POST['provider_pwd'];
	$result=mysqli_query($conn, "select * from job_provider where job_provider_email='$email' AND job_provider_pass='$pass'");
	$row=mysqli_fetch_array($result);
	if(is_array($row))
	{
	$_SESSION['pid']=$row['job_provider_id'];
	$_SESSION['pname']=$row['job_provider_name'];
	}
	else{
		$a="invalid pass";
		header("Refresh:2;url=PROVIDER_LOGIN.php");
		echo $a;
	}
}
if(isset($_SESSION['pid'])){
	header("location:job_post.php");
}					
?>	
 
<DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Job provider Login</TITLE>
		<style type= text/css >
			body{
				background-image: url("slider_img.png");
			
				background-size: cover;
				background-position: center;
				}
			table{
				padding-top: 250px;
				border-collapse:separate; 
				border-spacing: 0 1em;
			
				}
				#title1{
				
					 
					 font-family: "Times New Roman", Times, serif;
					 font-size: 40px;
					 
					 }
					 B{
					 font-family: "Times New Roman", Times, serif;
					 font-size: 18px;
					 }

  
			
			.login_box{
		position: absolute;
		top: 60%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 380px;
		height: 410px;
		padding: 60px 20px;
		box-sizing: border-box;
		background:rgba(0,0,0,0.5);
}
.tb{
	width:100%;
	overflow:hidden;
	font-size:20px;
	padding:8px 0;
	margin:8px 0 ;
	border-bottom:1px solid;
	
}

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
   <title></title>
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
   
	
	</HEAD>
	<BODY >
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
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
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
		<FORM  method= "post" action= "" class="form1">
		
				
					<center><FONT size= 4><h1 style="color:#ff0000;"> Job provider Login </h1></FONT></center>
				
				<div class="tb">
			
				
					<!--<B style=" color: white">Username:</b>-->
					<i style="color:add8e6" class="fa fa-user" aria-hidden="true"></i>
					<INPUT style="background:white" type="email" name="provideremail" value="" placeholder="enter email" required>
				
				</div>
				<div class="tb">
				
					<!--<b style=" color: white">Password:</B>-->
						<i  style="color:#add8e6" class="fa fa-lock" aria-hidden="true"></i>
					<INPUT style="background:white" type="Password" name="provider_pwd" value="" placeholder="enter password" required>
				
				</div>
				
				
			
					<INPUT type="submit" name ="submit" value= "Login" >
					<!--<button onclick="updateme(--> <!--')" class='btn btn-mini btn-info' value=''>login</button>-->

		 <a href="provider_reg.php">Sign Up</a>
				
			
		</FORM>
		<!---<script>
		//	function updateme(id){

				//alert(id); just to get the id
			//	window.location.href = 'provider_login_ggs.php?id='+id;

				//}
				</script>-->
		</div>
	</BODY>
</HTML>