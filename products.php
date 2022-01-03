<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>test</title>
<link href="./style 2.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="home"> 
        <div class="nav"> 
        <ul>

            <li class="logo" ><a href="project1nav.html">SIXTEN <span>CLOTHING</span></a></li>
            <li> <a href="#">  contact </a> </li>
            <li> <a href="#">  about us </a> </li>
            <li> <a href="#">  product </a> </li>
            <li> <a href="#">  home </a> </li>
            
        </ul>    
        </div>
        <div class="clr"> </div>
    
<h1 class="ss">
    <span class="yy">o</span>ur product
</h1>



    
<!--to complete the project-->
</body>
</html>

<?php 
include("connection.php");
$quer= "select * from proudcts";

$rec = mysqli_query($con,$quer);

while($data = mysqli_fetch_array($rec))
{

?>
<div class="test">
    <img src="<?php echo $data ['iamge']; ?>">
    <h2>new product away</h2><br>
    <h4><?php echo $data ['price']; ?></h4>
    <h3><?php echo $data ['pname']; ?> </h3>
    <button>buy now</button>
    </div>

    <div class="clr">

    <div class="test">
    <img src="<?php echo $data ['iamge']; ?>">
    <h2>new product away</h2><br>
    <h4><?php echo $data ['price']; ?></h4>
    <h3><?php echo $data ['pname']; ?> </h3>
    <button>buy now </button>
    </div>

    <div class="clr">

   


<?php

}

?>









<!--</table>-->
    
</body>
</html>