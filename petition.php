<?php 
include_once('connection.php'); 
//$query="select * from petition"; 
$result=mysqli_query($con,"call petition_procedure()"); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<link rel="stylesheet" href="dbstyle.css">
		<title> DBpetition </title> 
	</head> 
	<body> 
  <!-- <a href="FilePetition.html">File a Petition</a> -->
	<div class="sidenav">
      <!-- <a href="home.html">Home</a> -->
			<a href="FilePetition.html">Start Petition</a>
      <a href="outpass.php">Outpass</a>
      <a href="complaint.php">Complaint</a>
      <a href="petition.php">Petition</a>
      <a href="student_reg.html">Student Registration</a>
			<a href="Index.html">Logout</a>
    </div>
	<!-- <button onclick="window.location.href = 'FilePetition.html';" class="petbutton">File a Petition</button> -->
	<!-- <br></br> -->
	<div style="overflow-x: auto;">
	<table align="right" border="1px" style="width:85%; line-height:50px;"> 
	<tr> 
		<th colspan="8" class="title"><h2>Petition Record</h2></th> 
		</tr> 
			  <th class="headline"> First name </th> 
			  <th class="headline"> Last name </th>
			  <th class="headline"> USN </th>
			  <th class="headline"> Room no. </th>
			  <th class="headline"> Contact no. </th>
			  <th class="headline"> Email </th>
			  <th class="headline"> Petition </th>
			  <th class="headline"> Support </th>

			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['firstname']; ?></td> 
		<td><?php echo $rows['lastname']; ?></td> 
		<td><?php echo $rows['usn']; ?></td> 
		<td><?php echo $rows['room']; ?></td>
		<td><?php echo $rows['contact']; ?></td>
		<td><?php echo $rows['mail']; ?></td>
		<td><?php echo $rows['Petition']; ?></td>
		<td><a href="#" class="btn btn-primary" id="myLink">Support</a>
		
		</td>
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</div>
	</body> 
	</html>
    
