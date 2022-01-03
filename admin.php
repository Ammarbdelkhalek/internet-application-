<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <header><h2>admin interface</h2></header>\

    <form method="POST">
        <label>look for something</label>
        <input type="text" name="search" placeholder="search by id or name " autocomplete="off" required> 
        <input type="submit" name="submit" value="serach !">

    </form>

<?php 

include 'connection.php';
if(isset($_POST['submit'])){
    $ss = $_POST['search'];

    $query= "SELECT * FROM `proudcts` WHERE `id`='$ss'";
    $ress = mysqli_query($con,$query); 

    //connection and query executed

if ($roww = mysqli_fetch_array($ress)){
    
    //varaible built in 

?>
    <br/><br/>
    <center> 
    <table border="2">
    <tr>
        <th>id</th>
        <th>name </th>
        <th>price</th>
        <th>color</th>
        <th>image</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>           

    <tr>
        <Td><?php echo $roww['id'] ?> </Td>
        <Td><?php echo $roww['pname'] ?> </Td>
        <Td><?php echo $roww['price'] ?> </Td>
        <Td><?php echo $roww['color'] ?> </Td>
        <td><img src=" <?php echo $roww['iamge']; ?>"/> </td>
        <td><a href=" update.php?id= <?php echo $roww['id']; echo $roww['pname'] ?>">Edit</a></td>
        <td><a href=" delete.php?id= <?php echo $roww['id']; ?>">Delete</a></td>




    </tr>
    </table>
    </center>
    <?php
}
else{
    echo " not found";


} }
?>


</body>
</html>