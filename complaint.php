<?php 
include_once('connection.php'); 
//$query="select * from Complaint"; 
$result=mysqli_query($con,"call comp_procedure()"); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<link href="dbstyle.css" rel="stylesheet">
		<title> DBcomplaint </title> 
	</head> 
	<body> 
	<div class="sidenav">
      <!-- <a href="home.html">Home</a> -->
      <a href="outpass.php">Outpass</a>
      <a href="complaint.php">Complaint</a>
      <a href="petition.php">Petition</a>
      <a href="student_reg.html">Student Registration</a>
			<a href="Index.html">Logout</a>
    </div>
  <div style="overflow-x: auto;">
	<table align="right" border="1px" style="width:85%; line-height:50px;"> 
	<tr> 
		<th colspan="8" class="title"><h2>Complaint Record</h2></th> 
		</tr> 
		    
			  <th class="headline"> First name </th> 
			  <th class="headline"> Last name </th>
			  <th class="headline"> USN </th>
			  <th class="headline"> Room no. </th>
			  <th class="headline"> Contact no. </th>
			  <th class="headline"> Email </th>
			  <th class="headline"> Complaint </th>
        
			  

			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['firstName']; ?></td> 
		<td><?php echo $rows['lastName']; ?></td> 
		<td><?php echo $rows['usn']; ?></td> 
		<td><?php echo $rows['room']; ?></td>
		<td><?php echo $rows['contact']; ?></td>
		<td><?php echo $rows['mail']; ?></td>
		<td><?php echo $rows['complaint']; ?></td>
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</div>
	</body> 
	</html>
    
