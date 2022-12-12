<?php

require_once "db.php";


function updatePassword($password)
{

    $con = getConnection();
    $sql = "update users set password='{$password}' where id='{$_COOKIE['id']}'";
      
    $status = mysqli_query($con, $sql);

    if($status){ return true;} 
      else{return false;}

}
?>