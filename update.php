<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>
<body>
<?php
include 'connection.php';

$id = $_GET['id'];
$qqury = mysqli_query($con,"select * from proudcts where id = '$id'");
$geet = mysqli_fetch_array($qqury);

if(isset($_POST['uupdate']))
{
    $pronamee = $_POST ['pnname'];
    $pprice = $_POST ['price'];
    $prodcolor = $_POST ['color'];
    

    $ssqql = "update proudcts set pname	= '$pronamee',price='$pprice',color='$prodcolor' where id = '$id'";
    $edit = mysqli_query($con,$ssqql);

    if($edit)
    {
        mysqli_close($con);
        header("location:admin.php");
        echo " edit is successfuly";

    }
else{
    echo"An Error Occured";


}

}
?>

<h4>Update Data</h4>
<form method="POST"> 
<input type="text" name="pnname" value="<?php echo $geet['pname']?>" placeholder="enter name" required><br><br>
<input type="text" name="price" value="<?php echo $geet['price']?>" placeholder="enter price" required><br><br>
<input type="text" name="color" value="<?php echo $geet['color']?>" placeholder="enter color" required><br><br>
<input type="submit" name="uupdate" value="Update">






</form>




</body>
</html>