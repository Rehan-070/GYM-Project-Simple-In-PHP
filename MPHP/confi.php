<?php
   // $conn = new mysqli("localhost","root","","main99") or die("Couldn't connect");
    $username =$_POST['username'];
    $email =$_POST['email'];
    $age =$_POST['age'];
    $password =$_POST['password'];

    //data base connect
   $conn = new mysqli("localhost","root","","main99") or die("Couldn't connect");
    if($conn->connect_error){
        die('conction failed : '.$conn->connect_error);
    }
    else{
        $st=$conn->prepare("insert into userss(Username,Email,Age,Password) values(?,?,?,?)");
        $st->bind_param("ssii",$username,$email,$age,$password);
        $st->execute();
        echo "<script> alert('DATA SUCCESSFULLY SAVED ') </script>";
        $st->close();
        $conn->close();
    }
?>