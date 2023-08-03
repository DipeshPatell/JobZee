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
	$sql="SELECT * from jobs where job_id= '".$_REQUEST['id']."'" ;
	$result = mysqli_query($con, $sql);
?>
<DOCTYPE HTML>
<HTML>
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
                                    <a class="nav-link" href="index.php" style=" color: white"><b>Home</b></a>
                                 </li>
								 <li class="nav-item active">
                                    <a class="nav-link" href="logout.php" style=" color: white"><b>LOgout</b></a>
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
	
	
		
		
		
			
	
			
		
			<div class="seekeradmin">
	
				<table>	<?php
							$i=0;
					if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_array($result)){
		//	echo $row['job_title'];
					?>		
					<form action="apply_jobs_db.php" method='post' enctype="multipart/form-data">
					<tr><td>Job Id</td><td><input type="text" value="<?php echo $row['job_id'];?>" name="jid"></td></tr>
					<tr><td>Your iD</td><td><input type="text" value="<?php echo $_GET['seekerid'];?>" name="yid"></td></tr>
				<tr>	<td> Job</td><td><input type='text' name='job_title' value="<?php echo $row['job_title']; ?>" disabled></td></tr>
					 <tr><td>Job category</td><td><input type='text' name='job_category' value="<?php echo $row['job_category']; ?>" disabled></td></tr>
					 <tr><td>Job hours</td><td><input type='text' name='job_category' value="<?php echo $row['job_hours']; ?>" disabled></td></tr>
					<tr> <td>Job experience</td><td><input type='text' name='job_experience' value="<?php echo $row['job_experience']; ?>" disabled></td></tr>
					<tr><td>Job description</td><td><textarea name='job_description' disabled> <?php echo $row['job_description']; ?> </textarea></td></tr>
					
					 <tr><td>Enter Resume Url</td><td><input type="url" name="resume" placeholder="Enter Resume URL" required></td></tr>
					<tr> <td><input type="submit" value="Apply NOW"></td></tr>
					 </form>
					 <?php $i++;
					}
					
					}
				
					?>
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
	  funcion onApplyNow()
		   {
			   var jobid="<?php $_GET['id']; ?>";
			   var seekerid = "<?php $_GET['seekerid']; ?>";
			   window.locatio.href="apply_jobs_db.php?jobid= " + jobid + "&seekerid=" + seekerid;
		   }
	  
	
   //-->
</script>
	</BODY>
</HTML>