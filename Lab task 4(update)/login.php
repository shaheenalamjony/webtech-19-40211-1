

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include "h.php";
?>
<form action="validate.php" method="post">
    <Pre>
    <fieldset>
    <legend>Login</legend>
    Name     : <input type="email" name="name" id=""><br>
    Password : <input type="text" name="pass" id=""><br>
    <input type="checkbox" name="remember" id=""> Remember Me<br>
    <input type="submit" value="Login" name="login"> 
    </fieldset>
    </Pre>
</form>
<?php 
include "footer.php";
?>
</body>
</html>

