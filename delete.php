<?php 

include 'connection.php';

$id = $_GET['id'];
$dell = mysqli_query($con,"delete from proudcts where id = '$id'");


if($dell)
    {
        echo "deleted successfuly";
        mysqli_close($con);
        header("location:admin.php");
    }
else{
    echo"An Error Occured";


}










?>