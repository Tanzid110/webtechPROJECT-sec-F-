<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == "" || $password2 == ""){
        header('location: ../views/users/Signup.php');
    }else{      
        
        $con = mysqli_connect('localhost', 'root', '', 'tourism');
        $sql = "insert into users values('{$username}', '{$email}','{$password}','{$password2}' )";
        $result = mysqli_query($con, $sql);
        
        if($result){
            header('location: ../views/users/login.php');
        }else{
           echo "DB error";
        }
    }

?>