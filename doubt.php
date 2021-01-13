<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $con= mysqli_connect('localhost','root','','coding_club');
    if($con->connect_error){
        die('Connection Failed : '.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into doubt(name,email,message)
        values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$message);
        $stmt->execute();
        echo "Query submitted succesfully";
        $stmt->close();
        $con->close();
    }
   
?>