<?php

if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Name']);
    header('location:loginform.php');  
}






?>