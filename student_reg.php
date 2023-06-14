<?php
     
     $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $usn= $_POST['usn'];
     $room = $_POST['room'];
     $contact = $_POST['contact'];
     $mail = $_POST['mail'];
     $hostel = $_POST['hostel'];
     $address= $_POST['address'];


    //database connection
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hostel_managemnt";

    $conn =mysqli_connect($servername,$username,$password,$dbname);
     if($conn->connect_error){
      die('Connection failed: '.$conn->connect_error);
   }else{
    //   $stmt = $conn->prepare("insert into student(firstName, lastName, usn, room, contact, mail, hostel, address) 
    //   values(?,?,?,?,?,?,?,?)");
    //   $stmt->bind_param("sssiisss",$firstName ,$lastName ,$usn ,$room , $contact ,$mail ,$hostel, $address );
      
    //   $stmt->execute();
      
    //   echo "REGISTRATION SUCCESFUL";
    //   $stmt->close();
     
    //   $conn->close();
    //}

    $sql1= "insert into student(firstName, lastName, usn, room, contact, mail, hostel, address) 
     values('$firstName' ,'$lastName','$usn','$room', '$contact','$mail','$hostel' , '$address');";
     $sql2= "insert into login(username,password) values('$firstName','$usn');";
     try{
     if($conn->query($sql1) == true && $conn->query($sql2) == true){
      echo "REGISTRATION SUCCESSFUL";
      $insert=true;
     }
    }
    catch(Exception $e){
      //echo 'Message: ' .$e->getMessage();
      echo "You have already registered as a Student";
    }
     //else{
      //echo "ERROR: $sql1 and $sql2 <br> $conn->error";
    // }
    }
?>

