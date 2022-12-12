<?php 

require_once  "../model/passModel.php";

$data = $_POST['json'];
$data = $_POST['json'];
  $passwordjson = json_decode($data);


 if(updatePassword($passwordjson->password)==true)
 {echo "Password Change Successful"; setcookie('password',$passwordjson->password, time()+60*60,'/');}
 else{

    echo "Password Change failed";
 }


?>

 