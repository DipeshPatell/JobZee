<?php	
session_start();
	if($_SESSION["sid"]){
        ?>
        <?php
        }else  
        {
            header("location:SEEKER_LOGIN.php");
        }
        ?>
<DOCTYPE html>
<html>
	<HEAD>
		<TITLE> see jobs</TITLE>
		<style type= text/css >
			body{
				background-image: url("slider_img.png");
				background-position: center;
				background-size: cover;
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
					  .form1{ margin-top: 300px; 
			color: Red;
			
			padding-left: 500px;
			
  }
  li{ color : white; 
  }
  .seekeradmin{
			background-color:white;
			margin-top:400px;
				margin-bottom:2000px;
	
			}
				.panelLinks{
			margin-top:300px;
			margin-left:300px;
			margin-right:300px;
			font-size: 50px;
			font-family: "Times New Roman";
		background-color: blue;}
					 
					 
			</style>
			 <!-- Basic -->
   
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
  <script language="javascript" src="users.js" type="text/javascript"></script>
   
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
                                    <a class="nav-link" href="seeker_profile.php?seekerid=<?php echo $_SESSION['sid']; ?>" style=" color: white"><b>My Profile</b></a>
                                 </li>
								  <li class="nav-item active">
                                    <a class="nav-link" href="logout_s.php" style=" color: white"><b>Logout</b></a>
                                 </li>
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
	
	
		
		
		
			
	
			
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="seekeradmin">
	
				<center><table><form action="apply_jobs.php" method="post">
					<tr>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">Job  &nbsp &nbsp      </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">Job Category   &nbsp &nbsp </font> </th>  
						
					</tr>
					<?php
					$conn= mysqli_connect("localhost", "root", "","jobzee");
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
$result=mysqli_query($conn, "SELECT * from jobs");

							$i=0;
					if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_array($result)){
			
					?>				
					<tr>	
					
							<td><?php echo $row["job_title"] ?></td> &nbsp &nbsp
					
							<td><?php echo $row["job_category"] ?></td>&nbsp &nbsp
							
								<td>
						<a href="apply_jobs.php?id=<?php echo $row["job_id"]; ?>&seekerid=<?php echo $_SESSION['sid'] ?>">Apply Now</a>&nbsp &nbsp
							</td>

							
					</tr>
					<?php $i++; }
					}?>			
					</table>
				
			
				
					</div>
							
				
		<script type = "text/javascript">
   <!--
      // Form validation ahya checkbox
      function validate() {
      
         if( document.myForm.Adminid.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.Admin_pwd.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
     
         return( true );
      }
	  
	       function validateEmail() {
         var emailID = document.myForm.Adminid.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
		 return(true);
		   }
    
		
}
}
      }
	  
	
   //-->
</script>
	</BODY>
</html>