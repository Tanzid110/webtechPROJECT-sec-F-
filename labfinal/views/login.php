<?php

session_start();

 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
<fieldset>

<legend>

    <h1>LOGIN</h1>

</legend>

<form method ="POST" action="../controller/logincheck.php">

    <label for="id"><b>ID : </b></label><br>

    <input type="text" placeholder="Enter Id" name="id" id="id" required><br>



    <label for="password"><b>password : </b></label><br>

    <input type="password" placeholder="Enter password" name="password" id="password" required><br>
    <br>

    <input type="checkbox" id="rememberme" name="rememberme" value="s">
         <label for="checkbox"> Remember Me</label><br>

         <hr>

    <input type="submit" class="registerbtn" value="Login">





            <p>creat an account? <a href="registration.php">Register</a>.</p>
</body>
</html>