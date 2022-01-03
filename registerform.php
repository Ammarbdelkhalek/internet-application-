<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registerform.css" rel="stylesheet">

    <title>clothing</title>
</head>
<body>
    
    <form method="post" action="register.php">
        <H2>please enter your data here</H2><br>


        <label for=""><b>please enter your name</b></label><br>
        <input type="text" name="ne" required><br>


        <label for=""><b>please enter your email</b></label><br>
        <input type="email" name="email" required><br>

        <label for=""><b>please enter your password</b></label><br>
        <input type="password" name="p1" required> <br><br>
        
        <label for=""><b>please confirm your password</b></label><br>
        <input type="password" name="p2" required> <br><br>

        <input type="submit" name="subm" id="REGISTER" value="Continue">



    </form>

    <p> if you have an account<a href= "loginform.php"> login </a></p>
    
</body>
</html>