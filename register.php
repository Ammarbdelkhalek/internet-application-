<?php
include ("connection.php");

$name = $_POST ['ne'];
$id = $_POST ['id'];
$email = $_POST ['email'];
$password = $_POST ['p1'];
$passwordd = $_POST ['p2'];

$error = array();
if(empty($name)){
    array_push($error,"username is required");
}

if(empty($email)){
    array_push($error,"email is required");
}if(empty($password)){
    array_push($error,"password is required");
}

if($password != $passwordd){

    die ("password doesnot match");}

else{

$sql = "INSERT INTO `users` ( `username`,  `Email`,`Password`,`confirm password`) VALUES ('$name','$email','$password','$passwordd');";


if($con-> query($sql)){
    header('location:homeform.php');
   echo "REGISTERED SUCESSFULLY";
}
else {
    die ("NOT REGISTERED");
     }

}
?>