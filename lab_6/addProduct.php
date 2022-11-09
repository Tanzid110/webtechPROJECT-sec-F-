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
    <title>product</title>
</head>
<body>

        <form method="post" action="addProductcheck.php" enctype="">
            <fieldset>
                <legend>ADD PRODUCT</legend>
                Name: <input type="text" name="name" value=""/> <br>
                Buying Product: <input type="number" name="buying_product" value=""/> <br>
                Selling Product: <input type="number" name="selling_product" value=""/> <br>
                <input type="submit" name="btn" value="Submit"/>
            </fieldset>
        </form>
</body>
</html>