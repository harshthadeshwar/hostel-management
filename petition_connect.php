<?php 
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $usn= $_POST['usn'];
   $room = $_POST['room'];
   $contact = $_POST['contact'];
   $mail = $_POST['mail'];
   $Petition = $_POST['Petition'];


  //database connection
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="hostel_managemnt";

  $conn =mysqli_connect($servername,$username,$password,$dbname);
  if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into petition(firstname, lastname, usn, room, contact, mail, Petition) 
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssiiss",$firstname ,$lastname ,$usn ,$room , $contact ,$mail ,$Petition );
    try{
			$stmt->execute();
			echo "PETITION STARTED SUCCESSFULLY";
		}
		catch(Exception $e)
		{
			echo "YOU ARE NOT A REGISTERED STUDENT";
		}
    #$stmt->execute();
    #echo "REGISTRATION SUCCESFUL";
    $stmt->close();
    $conn->close();
  }
?>