<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "world";


// create conn.


$con = new mysqli ($servername,$username,$password,$dbname);


// check connection 

if (!$con) {

    die ("connection failed" . $con->connect_error) ;
}



?>























