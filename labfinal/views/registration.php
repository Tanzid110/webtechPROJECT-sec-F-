<!DOCTYPE html>
<html lang="en">
<head>

  <title>REGISTRATION</title>
</head>
<body>
<fieldset>

<legend>

    <h1>Register</h1>

</legend>

<form method="POST" action="../controller/regcheck.php">



    <p>Please fill in this form to create an account.</p>

    <hr>

    <label for="id"><b>ID : </b></label><br>

    <input type="text" placeholder="Enter Id" name="id" id="id" required><br>



    <label for="name"><b>Name : </b></label><br>

    <input type="text" placeholder="Enter name" name="name" id="name" required><br>



    <label for="email"><b>Email</b></label><br>

    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="psw"><b>Password</b></label><br>

<input type="password" placeholder="Enter Password" name="password" id="password" required><br>



<label for="pswrepeat"><b>Repeat Password</b></label><br>

<input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required><br>



<label for="usertype"><b>User Type <i>[User/Admin]</i>:</b></label><br>

<select name="usertype" id="cars">

    <option value="user">user</option>

    <option value="admin">admin</option>

</select>

<hr>
<input type="submit" class="registerbtn" value="Register">





            <p>Already have an account? <a href="login.php">Login</a>.</p>



        </form>

    </fieldset>
</body>
</html>