<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        header('location: ../views/signup.php?err=null');
    }else{      
        
        $con = mysqli_connect('localhost', 'root', '', 'login');
        $sql = "insert into registration values('', '{$username}', '{$email}','{$password}' )";
        $status = mysqli_query($con, $sql);
        
        if($status){
            header('location: ../views/login.php');
        }else{
           echo "DB error";
        }
    }

?>