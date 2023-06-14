<?php
     
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $usn= $_POST['usn'];
     $room = $_POST['room'];
     $contact = $_POST['contact'];
     $mail = $_POST['mail'];
     $complaint = $_POST['complaint'];


    //database connection
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hostel_managemnt";

    $conn =mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
      
      die('Connection failed: '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into complaint(firstName, lastName, usn, room, contact, mail, complaint) 
      values(?,?,?,?,?,?,?)");
      $stmt->bind_param("sssiiss",$firstName ,$lastName ,$usn ,$room , $contact ,$mail ,$complaint );
      try{
        $stmt->execute();
        echo "COMPLAINT FILED SUCCESSFULLY";
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