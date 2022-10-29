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
    <title>signup</title>
</head>
<body>
    <form method="post" action="signupCheck.php" enctype="">
        <fieldset>
            <legend align= "center"><h1 style="color:brown">SIGNUP</h1></legend>
            <table align= "center">
                <tr>
                    <td>USERNAME</td>
                    <td><input type="text" name="username" value="" placeholder="username" /></td>
                </tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="email" name="email" value="" placeholder="email" /></td>
                </tr>
                <tr>
                    <td>PHONE</td>
                    <td><input type="number" name="number" value="" placeholder="phone" /></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="password" name="password" value="" placeholder="password" /></td>
                </tr>
                <tr>
                    <td>DATE OF BIRTH</td>
                    <td><input type="date" name="dob" value="" /></td>
                </tr>
                <tr>
                    <td>GENDER</td>
                    <td>
                        <input type="radio" name="gender" value=""/> Male 
                        <input type="radio" name="gender" value=""/> Female 
                        <input type="radio" name="gender" value=""/> Other
                    </td>
                </tr>
                <tr>
                    <td>PHOTO</td>
                    <td><input type="file" name="photo" value="" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="" value="Submit"/>
                        <input type="reset" name="" value="Reset"/>
                    </td>
                </tr>

         <li text align="right">
            <a href="login.php"> <b> <i> GO TO LOGIN </i> </b></a>
         </li>
            </table>
        </fieldset>
    </form>
</body>
</html>