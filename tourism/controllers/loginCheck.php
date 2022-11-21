<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: ../veiws/login.php?err=null');
    }else{

        $con = mysqli_connect('localhost', 'root', '', 'login');
        $sql = "select * from registration where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            setcookie('status', 'true', time()+3600, '/');
            header('location: ../views/home.php');
        }else{
            header('location: ../veiws/login.php?err=invalid');
        }
    }
   

      
?>







//     $file = fopen('../user.txt', 'r');
    //     $status = false;
    //     while(!feof($file)){
    //         $data = fgets($file);
    //         $user = explode("|", $data);
    //         //print_r($user);
    //         if(trim($user[0]) == $username && trim($user[1]) == $password){
    //             $status = true;
    //             setcookie('status', 'true', time()+3600, '/');
    //             $login_user = ['username'=> $user[0],  'email'=>$user[2]];
    //             $_SESSION['login_user'] = $login_user;
    //             if($user[0] == 'admin'){
    //                 $su = true;
    //             }
                
    //         }
    //     }
    //     if($su){
    //         header('location:../admin/admin.php');
    //     }
        
    //     else if($status){
    //         header('location:../views/home.php');
    //     }else{
    //         header('location: ../veiws/login.php?err=invalid');
    //     }