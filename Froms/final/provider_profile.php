	
<?php	
session_start();
	if($_SESSION["pid"]){
        ?>
        <?php
        }else  
        {
            header("location:PROVIDER_LOGIN.php");
        }
   
	$con= mysqli_connect("localhost","root","","job_portal");

	$sql="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, jobs.job_experience, jobs.posted_date, jobs.job_city from jobs where jobs.job_provider_id='" . $_SESSION["pid"] . "' ";
	
	$sql2="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, response.job_id, response.seeker_id, response.resume, response.status, job_seeker.seeker_name, job_seeker.seeker_email, job_seeker.seeker_phone from jobs, response, job_seeker where jobs.job_id= response.job_id AND jobs.job_provider_id ='" . $_SESSION["pid"] . "'  AND job_seeker.seeker_id=response.seeker_id"  ;
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
?>
	


<DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> provider profile</TITLE>
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
			margin-top:300px;
   margin-bottom:200px;}
		
				.panelLinks{
			margin-top:400px;
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
                                    <a class="nav-link" href="logout_p.php" style=" color: white"><b>Logout</b></a>
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
		
	
		<center>posted jobs</center>
		
		
		</div>
			
			
			<div class="seekeradmin">
				<center><table>
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job description|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job hours|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job experiance|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job category|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job city|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|posted date|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Edit|  &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Delete|    &nbsp &nbsp     </font></th>


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
					<td><?php echo $row["job_experience"];?></td>
					<td><?php echo $row["job_category"];?></td>
					<td><?php echo $row["job_city"];?></td>
					<td><?php echo $row["posted_date"];?></td>
					<td>
					<a href="edit_jobs.php?id=<?php echo $row["job_id"]; ?>">Edit</a>
							</td>
							<td>
							<a  onclick='check()' href="delete_jobs.php?id=<?php echo $row["job_id"];  ?>">Delete</a>
							</td>
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
					
					
					
					
		<div class="panelLinks">
		<ul>
	
		<li>Responses on my jobs</li>
		
		</ul>
		</div>
			
			
			<div class="seekeradmin">
				<center><table>
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker id|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker name|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker email|      &nbsp &nbsp  </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job seeker phone|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Resume Link|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Accept Job|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Decline Job|    &nbsp &nbsp     </font></th>


					</tr>
					<tr>
						<?php 
						$i=0;
						
					while($row= mysqli_fetch_array($result2)){
					?><tr>
										
					<td><?php echo $row["job_id"];?></td>
					<td><?php echo $row["job_title"];?></td>
					<td><?php echo $row["seeker_id"];?></td>
					<td><?php echo $row["seeker_name"];?></td>
					<td><?php echo $row["seeker_email"];?></td>
					<td><?php echo $row["seeker_phone"];?></td>
					<td><a href="<?php echo $row["resume"];?>">Resume</a></td>
				<td><?php
					if($row['status']==1){
						echo '<font color="green"> Accepted</font>';
					}
					else{
						
							?><a href="accept_job.php?id=<?php echo $row["seeker_id"]; ?>">Accept</a>
							</td><?php } ?>
							<td><?php
					if($row['status']==2){
						echo '<font color="red"> Declined</font>';
					}
					else{
						?>
							<a onclick="check()" href="decline_job.php?id=<?php echo $row["seeker_id"]; ?>">Decline</a>
							</td><?php } ?>
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
	  function check()
	  {
		  confirm("Are you sure you want to decline?");
	  }
   //-->
</script>
	</BODY>
</HTML>
				