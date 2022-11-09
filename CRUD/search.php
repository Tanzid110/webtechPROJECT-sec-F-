<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
</head>
<body>
    <fieldset>
        <legend>SEARCH</legend>
            <label for="site-search"></label>
                 <input type="search" id="site-search" name="q">
                     <button>Search</button>
                     
        <?php
         $conn = mysqli_connect('localhost','root','','product');

         $sql = "select * from phone";
         $result = mysqli_query($conn,$sql);
         $link_update = 'update.php';
         $link_delete = 'delete.php';
        echo"<table border=1>
             <tr>
                  <th>Name</th>
                  <th>Buying Price</th>
                  <th>Selling Price</th>
             </tr>";
        while($data= mysqli_fetch_assoc($result)){
            
            echo "<tr>
                     <td>{$data['name']}</td>
                     <td>{$data['buying price']}</td>
                     <td>{$data['selling price']}</td>
                     <td> <a href='$link_update'>edit</a></td>
                     <td> <a href='$link_delete'>delete</a></td>
                 </tr>";
            
        }
        echo"</table>";
       
        ?>
    </fieldset>
</body>
</html>