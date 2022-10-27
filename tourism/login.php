
<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>





<html>

<head>
   
    <title>login</title>
</head>
<body>
    <ul>
        <li>
            <a href="signup.php">register</a>
        </li>
    </ul>
    <fieldset>
        <legend align="center"><h1>LOGIN</h1></legend>
            <form method="POST" action="loginCheck.php" enctype = "">
            <table align="center">
                <tr>
                          <td>USERNAME</td>
                    <td>
                          <input type="text" name ="username" value="" placeholder="username" >   
                    </td>
                 </tr>

                   <tr>
                          <td>PASSWORD</td>
                    <td>
                          <input type="password" name ="password"value="" placeholder="password" >   
                    </td>
                   </tr>

                    <td>
                         <input type="submit" name ="submit" value="Submit" > 
                    </td>
                    <br>
                    <td> 
                        <hr> 
                        <p> <a href="">Forget Password ?</a> </p>
                    </td>
                    
                </tr>
            </table>
        </form
     </fieldset>
</body>
</html>