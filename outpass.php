<?php 
include_once('connection.php'); 
$query="select * from outpass"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<link rel="stylesheet" href="dbstyle.css">
		<title> DBoutpass </title> 
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
		<th colspan="15" class="title"><h2>Outpass Record</h2></th> 
		</tr> 
			  <th class="headline"> First name </th> 
			  <th class="headline"> Last name </th>
			  <th class="headline"> USN </th>
			  <th class="headline"> Branch </th>
        <th class="headline"> Semester </th>
			  <th class="headline"> Room no. </th>
			  <th class="headline"> Contact no. </th>
			  <th class="headline"> Email </th>
			  <th class="headline"> Hostel </th>
			  <th class="headline"> Going on </th>
			  <th class="headline"> Returning on </th>
			  <th class="headline"> Purpose </th>
			  <th class="headline"> Contact Person </th>
			  <th class="headline"> Approve </th>
			  <th class="headline"> Decline </th>
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['firstname']; ?></td> 
		<td><?php echo $rows['lastname']; ?></td> 
		<td><?php echo $rows['usn']; ?></td> 
		<td><?php echo $rows['branch']; ?></td>
		<td><?php echo $rows['semester']; ?></td> 
		<td><?php echo $rows['roomno']; ?></td>
		<td><?php echo $rows['contactno']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['hostel']; ?></td>
		<td><?php echo $rows['goingon']; ?></td>
		<td><?php echo $rows['returningon']; ?></td>
		<td><?php echo $rows['purpose']; ?></td>
		<td><?php echo $rows['contactpersonphone']; ?></td>
		<td><a href="#" class="btn btn-primary">Approve</td>
		<td><a href="#" class="btn btn-danger">Decline</td>
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</div>
	</body> 
	</html>