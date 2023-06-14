<?php
	$firstname = $_POST['Fname'];
	$lastname = $_POST['Lname'];
    $usn = $_POST['usn'];
	$branch = $_POST['branch'];
    $semester = $_POST['sem'];
	$roomno = $_POST['roomno'];
	$contactno = $_POST['contact'];
	$email = $_POST['mail'];
	$hostel = $_POST['gender'];
	$hostelno = $_POST['hostelno'];
	$goingon = $_POST['goingon'];
	$goingtime = $_POST['goingtime'];
	$returningon = $_POST['returningon'];
	$returntime = $_POST['returntime'];
	$purpose = $_POST['reason'];
	$otherpurpose = $_POST['otherpurpose'];
	$contactperson = $_POST['contactperson'];
	$contactpersonphone = $_POST['contactpersonphone'];
	

	// Database connection
	$conn = mysqli_connect('localhost','root','','hostel_managemnt');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into outpass(firstname,lastname, usn,	branch,	semester,	roomno,	contactno,	email,	hostel,	hostelno,	goingon,	goingtime,	returningon,	returntime,	purpose,	otherpurpose,	contactperson,	contactpersonphone) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssiissssssssssi", $firstname,$lastname, $usn,	$branch,	$semester,	$roomno,	$contactno,$email,	$hostel,	$hostelno,	$goingon,	$goingtime,	$returningon,	$returntime,	$purpose,	$otherpurpose,	$contactperson,	$contactpersonphone);
		try{
			$stmt->execute();
			echo "OUTPASS REQUESTED SUCCESSFULLY";
		}
		catch(Exception $e)
		{
			echo "YOU ARE NOT A REGISTERED STUDENT";
		}
		#$stmt->execute();
		#echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>