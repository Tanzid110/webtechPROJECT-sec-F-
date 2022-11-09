<?php
    session_start();
    $name = $_POST['name'];
    $buying_price = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];

    if($name == "" || $buying_price == "" || $selling_price == ""){
        header('location: signup.php?err=null');
    }else{      
        
        $con = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "insert into users values('', '{$name}', '{$buying_price}', '{$selling_price}')";
        $status = mysqli_query($con, $sql);
        
        if($status){
            header('location: show.php');
        }else{
           echo "DB error";
        }
    }

?>