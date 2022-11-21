<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $retype_pass = $_POST['repassword'];

    if($username == ""){
        header('location: ../veiws/forgetPass.php?err=null');
    }else{

        // $file = fopen('../user.txt','r');
        // while(!feof($file)){
        //     $data = fgets($file);
        //     $user = explode("|",$data);
        $con = mysqli_connect('localhost', 'root', '', 'login');
        $sql = "select * from registration where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);


            if(trim($user[0] == $username)){
                $old = trim($user[1]);
                $final = str_replace($old,$password,$data);
                file_put_contents('../user.txt',$final);

                header('location: ../veiws/login.php');
                

            }
            
            
        }






    
?>