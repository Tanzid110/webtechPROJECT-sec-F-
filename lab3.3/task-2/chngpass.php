<?php

$current_password = $_POST['currentPass'];
$New_Password= $_POST['Newpass'];
$Retype_New_Password= $_POST['RetyNpepass'];


if($current_password == "" || $New_Password == "" || $Retype_New_Password == ""){
    echo "empty!";
}
elseif($current_password == $New_Password){
      echo "please enter a new password";
}
elseif($Retype_New_Password == $New_Password){
      echo "succesfull- match with new password";
}
else{
    echo"<h1>failed to convert new password</h1>";
}

?>