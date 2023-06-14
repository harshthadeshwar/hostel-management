<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DATABASE</title>
    <link href="database.css" rel="Stylesheet for database" />
  </head>
  <body>
     Side navigation -->
    <!-- <div class="sidenav">
      <a href="home.html">Home</a>
      <a href="outpass.php">Outpass</a>
      <a href="complaint.php">Complaint</a>
      <a href="petition.php">Petition</a>
      <a href="student_reg.html">Student Registration</a>
    </div>

     Page content -->
    <!-- <div class="main">THIS IS THE ADMIN DATABASE FOR HOSTEL MANAGEMENT</div> -->
  <!-- </body>
</html> --> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
  <link rel="stylesheet" href="dbstyle.css">
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
		<th colspan="8" class="title"><h2>DATABASE RECORD</h2></th> 
		</tr> 
		    
			  <th class="headline"> TOTAL STUDENTS</th> 
			  <th class="headline"> TOTAL OUTPASS REQUESTED </th>
			  <th class="headline"> TOTAL COMPLAINTS FILED</th>
			  <th class="headline"> TOTAL PETITION STARTED </th>
			  
			  

			  
		</tr> 
  


<?php
  // Connect to the database
  $db_connection = mysqli_connect('localhost', 'root', '', 'hostel_managemnt');

  // Check the connection
  if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
  }


  // Execute the SELECT query
  $result1 = mysqli_query($db_connection, "SELECT COUNT(*) FROM student");
  $result2 = mysqli_query($db_connection, "SELECT COUNT(*) FROM outpass");
  $result3 = mysqli_query($db_connection, "SELECT COUNT(*) FROM complaint");
  $result4 = mysqli_query($db_connection, "SELECT COUNT(*) FROM petition");


  // Get the row from the result set
  $row1 = mysqli_fetch_row($result1);
  $row2 = mysqli_fetch_row($result2);
  $row3 = mysqli_fetch_row($result3);
  $row4 = mysqli_fetch_row($result4);

  ?>

  <tr><td><h1><?php echo $row1[0] ?></h1></td>
  <td><h1><?php echo $row2[0] ?></h1></td>
  <td><h1><?php echo $row3[0] ?></h1></td>
  <td><h1><?php echo $row4[0] ?></h1></td>

</tr>
<?php
  // Close the connection
  mysqli_close($db_connection);
  ?>
</table>

</div>
</body> 
</html>
