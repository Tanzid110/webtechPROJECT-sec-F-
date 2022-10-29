
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$RetyNpepass = $_POST['RetyNpepass'];

if($username == "" || $password == ""){
    header('location:login.php?err=null');
}else{


    $myfile = fopen("user.txt", "r");
    $status = false;
    while(!feof($myfile)){
            $data = fgets($myfile);
            $users = explode("|", $data);
            
            if(trim($users[0]) == $username && trim($users[1]) == $password ){
                setcookie('status', 'true', time()+3600, '/');
                $users[0]=$username;
                $users[1]=$RetyNpepass;
                $status =true;
            }
         
        }
            fclose($myfile);
    $file = fopen('user.txt','r');
    $status = false;

    while(!feof($file)){
        $data = fgets($file);
        $users = explode("|", $data);
        
        if(trim($users[0]) == $username && trim($users[1]) == $password )
        setcookie('status', 'true', time()+3600, '/');
                $users[0]=$username;
                $users[1]=$RetyNpepass;
        $status =true;
    }
    if($status){   
            header('location:home.php');
        }
        else{
            header('location:login.php');
        }
    }

?>