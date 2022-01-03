<?php
include("login.php");
include("logout.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
</head>
<body>
    
<h2>welcome to our home page</h2>
<section>
<?php

if(isset($_SESSION['Name'])){
    echo $_SESSION['Name'];
}

if(isset($_SESSION['ok'])){
    echo $_SESSION['ok'];
    unset ($_SESSION['ok']);


}
?>
</section>
    

<div>
    <br>
    <a href="homeform.php?logout='1'">Logout</a>

</div>
</body>
</html>