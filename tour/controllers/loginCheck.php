<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: ../veiws/users/login.php');
    }else{

        $con = mysqli_connect('localhost', 'root', '', 'tourism');
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../views/users/home.php');
        }else{
            header('location: ../veiws/users/login.php');
        }
    }
   

      
?>