
<?php
session_start();
	if($_SESSION["aid"]){
        ?>
        <?php
        }else  
        {
            header("location:ADMIN.php");
		}
  ?>
<?php	
	$con= mysqli_connect("localhost","root","","job_portal");
	$sql="SELECT * from job_provider WHERE reg_date >= CURDATE() - INTERVAL 15 DAY";
	$result = mysqli_query($con, $sql);
	
	//$sql2="SELECT * from jobs";
?>






<DOCTYPE HTML>
<HTML>
	<HEAD>
		<TITLE> Admin Login</TITLE>
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
                                    <a class="nav-link" href="logout_a.php" style=" color: white"><b>Logout</b></a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php" style=" color: white"><b>Home</b></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.hphp" style=" color: white"><b>About</b></a>
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
	
		
		<li><a href="seekeradmin.php">Seeker Admin</a></li>
		
		</ul>
		</div>
		
			
	
			
			
			<div class="seekeradmin">
	
				<center><table>
					<tr>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider Id|  &nbsp &nbsp      </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider email|     &nbsp &nbsp </font> </th>  
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider pass| &nbsp &nbsp     </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider name|  &nbsp &nbsp    </font></th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider address|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider comany name|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Provider phone|  &nbsp &nbsp  </font> </th>
							<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Reg Date|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Edit|  &nbsp &nbsp  </font> </th>
						<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Delete|  &nbsp &nbsp  </font> </th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Jobs Posted|  &nbsp &nbsp  </font> </th>
				
					</tr>
					<?php
							$i=0;
					if(mysqli_num_rows($result)>0){
					while($row= mysqli_fetch_array($result)){
			
					?>				
					<tr>	
					
							<td><?php echo $row["job_provider_id"] ?></td>
					
							<td><?php echo $row["job_provider_email"] ?></td>
							<td><?php echo $row["job_provider_pass"] ?></td>
							<td><?php echo $row["job_provider_name"] ?></td>
							<td><?php echo $row["job_provider_address"] ?></td>
							<td><?php echo $row["job_provider_cmp_name"] ?></td>
							<td><?php echo $row["job_provider_phone"] ?></td>
							<td><?php echo $row["reg_date"] ?></td>
							<td>
							<a href="edit_provider.php?id=<?php echo $row["job_provider_id"]; ?>">Edit</a>
							</td>
							<td>
							<a onclick="check()" href="delete_provider.php?id=<?php echo $row["job_provider_id"]; ?>">Delete</a>
							</td>
							<td>
							<a href="edit_providerjobsfilter.php?id=<?php echo $row["job_provider_id"]; ?>">see jobs</a>
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