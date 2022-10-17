<?php

$username = $_POST['username'];
$password = $_POST['pass'];

if($username == "" || $password == ""){
    echo "invalid username/password";
}
else if(strlen($username)<2){
    echo "must 2 cherecter";
}
else if(strlen($password)<8){
    echo"must 8 cherecter";
}
else if(strpos($password,'@') == false){
    echo"special cherecter";
}
else{
    echo"<h1>WLCOME TO LOGIN INFO</h1>";
}

?>