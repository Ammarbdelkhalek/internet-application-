<?php
include ("connection.php");

if(!isset($_SESSION)){
    session_start();
}
$error = array();

if(isset($_POST['login'])){
$nmee = mysqli_real_escape_string($con,$_POST ['nme']) ;
$pss = mysqli_real_escape_string($con,$_POST ['pas11']) ;

}




if(empty($nmee)){
    array_push($error,"Username is required");
}

if(empty($pss)){
    array_push($error,"password is required");
}

else{

$login="SELECT * FROM   `users` WHERE `username`='$nmee' AND `Password`='$pss' ";
$result=mysqli_query($con,$login);

if(mysqli_num_rows($result)==1){
    $_SESSION ['Name']=$nmee;
    $_SESSION ['ok']=" , Welcome to our page";

    header('location:homeform.php');


}
else{
    die("Incorrect Username or Password");
}







}



?>