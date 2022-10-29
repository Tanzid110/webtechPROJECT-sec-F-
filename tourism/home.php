
<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php?err=invalid');
    }

?>


<html>
    <head>
        <title>form</title>
        <style>
            h1{
                text-align: center;
                color: black;
            }
        </style>
    </head>
    <body>
            <table border="1" align="center" >
                <tr>
                    <td  colspan="2" bgcolor="yellow"><h1>WELCOME TO TOURISM</h1></td>
                </tr>
                <tr>
                    <th>DASHBORD</th>
                    <th>HOME</th>
                </tr>
                <tr>
                   <td><ul>
                   <li>
                        <a href="home.php"> <b> <i>HOME</i> </b></a>
                    </li>
                    <li>
                        <a href="profile.php"> <b> <i>PROFILE</i> </b></a>
                    </li>
                    <li>
                        <a href="EditProfile.php"> <b> <i>EDIT PROFILE</i> </b></a>
                    </li>
                    <li>
                        <a href="logout.php"> <b> <i>LOGOUT</i> </b></a>
                    </li>
                </ul></td>
                    <td align="center"><h2  style="color:green"><b><i>WE ALWAYS MAINTAIN OUR CLINT SAFETY</i></b></h2></td>
                   
                </tr>
            </table>
    </body>
</html>