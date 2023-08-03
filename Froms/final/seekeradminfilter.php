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
	$sql="SELECT * from job_seeker  WHERE reg_date >= CURDATE() - INTERVAL 15 DAY";
	$result = mysqli_query($con, $sql);
?>
	


<DOCTYPE HTML>
<HTML>
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
				 font-size: 15px;
			
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
			background-color:#b2ffff;
			

	
			}
				.panelLinks{
			margin-top:300px;
			margin-left:300px;
			margin-right:300px;
			margin-bottom:30px;
			font-size: 30px;
			font-family: "Times New Roman";
		background-color:#b2ffff;}
					 
					 
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
                                    <a class="nav-link" href="logout_a.php" style=" color: white"><b>Logout</b></a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style=" color: white"><b>Home</b></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.php" style=" color: white"><b>About</b></a>
                                 </li>
                               
                                 
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.php style=" color: white"><b>Contact Us</b></a>
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
	
		<li><a href="provideradmin.php">Provider Admin</a></li>
		
		</ul>
		</div>
			
		
			<div class="seekeradmin">
				<center><table>
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker ID|  &nbsp &nbsp </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker Name|  &nbsp &nbsp </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker NUmber|  &nbsp &nbsp </font> </th>  
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker Address|&nbsp &nbsp </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker Gender|  &nbsp &nbsp </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker AAdhar NUmber|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker mail|  &nbsp &nbsp </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Seeker pass|  &nbsp &nbsp </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Reg Date|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Edit|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Delete|  &nbsp &nbsp  </font> </th>
					</tr>
						<?php 
						$i=0;
						if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_array($result)){
					?>
										
					
							<td><?php echo $row["seeker_id"] ?></td>
							<td><?php echo $row["seeker_name"] ?></td>
							<td><?php echo $row["seeker_phone"] ?></td>
							<td><?php echo $row["seeker_address"] ?></td>
							<td><?php echo $row["seeker_gender"] ?></td>
							<td><?php echo $row["seeker_aadhar"] ?></td>
							<td><?php echo $row["seeker_email"] ?></td>
							<td><?php echo $row["seeker_pass"] ?></td>
							<td><?php echo $row["reg_date"] ?></td>
							<td>
							<a href="edit_seeker.php?id=<?php echo $row["seeker_id"]; ?>">Edit</a>
							</td>
							<td>
							<a onclick="check()" href="delete_seeker.php?id=<?php echo $row["seeker_id"]; ?>">Delete</a>
							</td>
					</tr>
					<?php $i++;}
					}?>
					
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
		//alert("Are you sure you want to delete?");
var a=	confirm("Are you sure you want to delete?");
if(a==true){
				window.location.href="delete_seeker.php?id=<?php echo $row["seeker_id"]; ?>";
}
else{
	window.locaiton.href="seekeradmin.php";
}
	  }
   //-->
</script>
	</BODY>
</HTML>
				