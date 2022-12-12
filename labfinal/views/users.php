<?php
include '../model/regiModel.php';
?>

<html>

<head>
    <title>all users</title>
</head>

<body>
    <fieldset align="center">
        <legend><h1>USERS</h1></legend>
        <button> <a href="home.php">go to home</a> </button>
        <br>
        
        <table align="center" border='1'>
            <tr>
                <th>ID</th> 
                <th>NAME</th>&ensp; 
                <th>EMAIL</th>&nbsp;&nbsp;
                <th>USER TYPES</th>&nbsp;&nbsp;
            </tr>


            <?php
                $sql = "select * from users";
                $con = getConnection();
                $res = mysqli_query($con,$sql);
                if($res){
                    while($data = mysqli_fetch_array($res)){
                        $id = $data['id'];
                        $name = $data['name'];
                        $email = $data['email'];
                        $usertype = $data['usertype'];


                        echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$usertype.'</td>  
                            </tr>';

                    }
                }

            ?>
        
        </table>
    </fieldset>
</body>

</html>