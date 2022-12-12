<?php 
    require_once "db.php";

    function login($user){
        $con = getConnection();
        $sql = "select * from users where id='{$user['id']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

?>