
<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php?err=bad_request');
    }

?>


<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO TOURISM</h1>
    <a href="logout.php" >logout</a>
</body>
</html>