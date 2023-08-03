<!DOCTYPE HTML>
<HTML>
<BODY>
<style>
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

<?php	
session_start();

   
	$con= mysqli_connect("localhost","root","","job_portal");

	$sql="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description,jobs.job_experience, jobs.job_city, jobs.posted_date from jobs where jobs.job_provider_id='" . $_REQUEST["id"] . "' AND posted_date >= CURDATE() - INTERVAL 15 DAY ";
	
	$sql2="SELECT jobs.job_id, jobs.job_category, jobs.job_title, jobs.job_hours, jobs.job_description, response.job_id, response.seeker_id, response.resume, response.status, response.apply_date, job_seeker.seeker_name, job_seeker.seeker_email, job_seeker.seeker_phone from jobs, response, job_seeker where jobs.job_id= response.job_id AND jobs.job_provider_id ='" . $_REQUEST["id"] . "'  AND job_seeker.seeker_id=response.seeker_id AND response.apply_date>= CURDATE() -INTERVAL 15 DAY";
	
	
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$result2 = mysqli_query($con, $sql2) or die(mysqli_error($con));
	
	?>		
	<div class="seekeradmin">
				<center><table>
					<tr>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|JobID|    &nbsp &nbsp    </font></th>
					<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Title|    &nbsp &nbsp      </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job description|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job hours|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Category|  &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job Experiaance|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Job City|    &nbsp &nbsp     </font></th>
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|POst Date|    &nbsp &nbsp     </font></th>


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
					<td><?php echo $row["job_category"];?></td>
					<td><?php echo $row["job_experience"];?></td>
					<td><?php echo $row["job_city"];?></td>
									<td><?php echo $row["posted_date"];?></td>

						
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
					<div class="panelLinks">
		<ul>
	
		<li><a href="#">Responses on THIS jobs</a></li>
		
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
<th><font style="color:black; font-family:Times New Roman; font-style:underline">|apply date|      &nbsp &nbsp  </font></th>

<th><font style="color:black; font-family:Times New Roman; font-style:underline">|Resume Link|    &nbsp &nbsp     </font></th>



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
					<td><?php echo $row["apply_date"];?></td>
					<td><a href="<?php echo $row["resume"];?>">Resume</a></td>
				
					</tr>
					
					<?php $i++; }
				
					?>
					
					</table></center>
					</div>
</body>
</html>