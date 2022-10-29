
<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "ENTER USERNAME/PASSWORD FIRST";
        }

        if($_GET['err'] == 'invalid'){
            echo "USERNAME/PASSWORD NOT FOUND";
        }

        // if($_GET['err'] == 'bad_request'){
        //     echo "INVALID USERNAME/PASSWORD";
        // }
    }

?>





<html>

<head>
   
    <title>login</title>
    <style>
            h2{
                text-align: center;
                background-color: black;
                color: aliceblue;
            }
        </style>
</head>
<body>
<h2>WELCOME TO LOGIN</h2>
    <ul>
        <li>
            <a href="signup.php"> <b> <i> Register </i> </b></a>
        </li>
    </ul>
    <fieldset>
        <legend align="center"><h1  style="color:brown">LOGIN</h1></legend>
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
                        <a href="Forgetpass.html"> <b> <i> Forget Password? </i> </b></a>
                    </td>
                </tr>
            </table>
        </form
    </fieldset>
</body>
</html>