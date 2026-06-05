<?php
        $email =$_POST['email'];
        $password =$_POST['password'];

        //data base connect
        $conn = new mysqli("localhost","root","","main99") or die("Couldn't connect");
        if($conn->connect_error){
            die('conction failed : '.$conn->connect_error);
        }
        else{
            $stmt=$conn->prepare("select * from userss where Email = ?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt_result=$stmt->get_result();
            if($stmt_result->num_rows > 0){
                $data=$stmt_result->fetch_assoc();
                if($data['Password'] === $password){
                    //header("location: edit.php");
                    echo "<script> alert('SUCCESSFULL') </script>";
                    
                }
                else{
                    echo "<script> alert('SOMETHING IS WRONG ') </script>";
                }
                
            }
            else{
                echo "<script> alert('INVALID EMAIL AND PASSWORD') </script>";
            }
           
        }

?>