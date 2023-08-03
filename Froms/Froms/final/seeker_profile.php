	
<?php	
session_start();
	if($_SESSION["sid"]){
        ?>
        <?php
        }else  
        {
            header("location:SEEKER_LOGIN.php");
        }
   
	$con= mysqli_connect("localhost","root","","job_portal");
	//$a=$_GET['seekerid'];
//mysqli_query($con, 'ALTER TABLE jobs
//ADD FOREIGN KEY (job_id) REFERENCES response(job_id)') or die(mysqli_error($con));
	//$sql="SELECT * from response where seeker_id=$a";
	$sql="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, response.job_id, response.status from jobs,response where seeker_id='" . $_SESSION["sid"] . "' AND jobs.job_id=response.job_id";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
	


<DOCTYPE html>
<html>
	<HEAD>
		<TITLE> seeker admin</TITLE>
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
			margin-top:200px;
			margin-left:300px;
			margin-right:300px;
			font-size: 50px;
			font-family: "Times New Roman";
		background-color: blue;}
					 
			</style>
			 <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Induko</title>
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



<div class="panelLinks">
		<ul>
	
		<li><a href="provideradmin.php">applied jobs</a></li>
		
		</ul>
		</div>
			
		
			<div class="seekeradmin">
				<center><table>
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job description|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job hours|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Status|    &nbsp &nbsp     </font></th>

					</tr>
					<tr>
						<?php 
						$i=0;
						
					while($row= mysqli_fetch_array($result)){
					?><tr>
										
					<td><?php echo $row["job_id"];?></td>
					<td><?php echo $row["job_title"];?></td>
					<td><?php echo $row["job_description"];?></td>
					<td><?php echo $row["job_hours"];?></td>
					<td><?php if ($row["status"]==0)
							echo "pending";
						else if($row["status"]==1)
							echo "Your request for job has been accepted, further interview regarding information will be given to you via email";
						else
							echo "declined"; ?>
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
							
				
		<script type = "text/javascript">
   <!--
      // Form validation code will come here.
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
         return( true );
      }
   //-->
</script>
	</BODY>
</html>
				