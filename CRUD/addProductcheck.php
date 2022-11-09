<?php

    $pname = $_POST['iteamname'];
    $bprice = $_POST['buy'];
    $sprice = $_POST['sell'];
    $profit = $sprice - $bprice;
    $conn = mysqli_connect('localhost','root','','product');
    //echo "Product : ".$pname."<br>"." Buy Price : ".$bprice."<br>"." Selling Price : ".$sprice;  
    
    $data = "INSERT INTO phone  VALUES ('{$pname}', '{$bprice}', '{$sprice}')";
    $result = mysqli_query($conn,$data);

    if($result){
        header('location:display.php');
    }
    else{
        echo "Error";
    }




?>