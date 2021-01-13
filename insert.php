<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con= mysqli_connect('localhost','root','','coding_club');
    if($con->connect_error){
        die('Connection Failed : '.$con->connect_error);
    }else{
        $stmt = $con->prepare("insert into student(name,email,password)
        values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$password);
        $stmt->execute();
        echo "Registration succesful";
        $stmt->close();
        $con->close();
    }
   
?>