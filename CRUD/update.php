
<!DOCTYPE html>
<html lang="en">

<head>
    <title>update</title>
</head>

<body>
    <fieldset>
        <legend>UPDATE PRODUCTS</legend>
        <form method="POST" action="updatecheck.php">
            <label for="itemname">Iteam Name:</label>
            <input type="text" id="itemname" name="iteamname"><br><br>
            <label for="buy">Buying price:</label>
            <input type="number" id="buy" name="buy"><br><br>
            <label for="sell">Selling price:</label>
            <input type="number" id="sell" name="sell"><br><br>
            <hr>
            <input type="checkbox" id="display" name="display">
            <label for="display"> Display</label><br><br>
            <input type="submit" value="Update">
        </form>
    </fieldset>
</body>

</html>