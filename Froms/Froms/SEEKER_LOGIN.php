


<DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE>Job seeker Login</TITLE>
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
				
					 .form1{ margin-top: 300px; 
			color: Red;
			align: center
			
  }
  .form1{ margin-top: 300px; 
			color: Red;
			
			padding-left: 500px;
					 
			</style>
			 <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>s3ekr</title>
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
	<p class="error"><?php 
	
		echo $error;
		
		?>
		</p>
		<p class="success"><?php 
	
		echo $success;
		
		?>
		</p>
		 <header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
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
                                    <a class="nav-link" href="index.html" style=" color: white"><b>Home</b></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.html" style=" color: white"><b>About</b></a>
                                 </li>
                               
                                 
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.html" style=" color: white"><b>Contact Us</b></a>
                                 </li>
                                 
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <select class="nav-link" name="login" onchange="la(this.value)">
										<option value="#link">Login</option>
										<option value="ADMIN.html">Admin</option>
										<option value="PROVIDER_LOGIN.HTML">Provider</option>
										<option value="SEEKER_LOGIN.HTML">Seeker</option>
									</select>
										
										<script>
											function la(src)
											{
												window.location=src;
											}
										</script>
										
									
                                 </li>
                              </ul>
							  <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <select class="nav-link" name="registration" onchange="ra(this.value)">
										<option value="#link">Registration</option>
										
										<option value="PROVIDER_REG.HTML">Provider</option>
										<option value="SEEKER_REG.HTML">Seeker</option>
									</select>
										
										<script>
											function ra(src)
											{
												window.location=src;
											}
										</script>
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
	  
		<FORM  method= "post" action= "validate_seeker.php" class="form1" >
			<TABLE align="center"  > 
				<TR >
					<TD colspan=2 id="title1" ><center><FONT size= 4><h1> Job Seeker Login Page</h1></FONT></center></TD>
				</TR>
			
				<TR >
					<TD><B style=" color: black">Username:</b></TD>
					<TD><INPUT type="text" name="seekerid"></TD>
				</TR>
				<TR >
					<TD><b  style=" color: black">Password:</B></TD>
					<TD><INPUT type="Password" name="seeker_pwd"></TD>
				</TR>
				<TR>
					
					<TD><INPUT type="reset" ></TD>
					<TD><INPUT type="submit" value= "Login" ></TD>
				</TR>
			</TABLE>
		</FORM>
	</BODY>
</HTML>
				