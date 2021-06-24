<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $passErr = "";
$name = $pass = "";
$regex = "@[^\w]@";
//$userNameChar = /^[a-zA-Z0-9._]*$/;

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $n=$_POST['name'];
    if(empty($_POST["name"])){
		$nameErr="Name is requied";
	}
    else{
        if(str_word_count($n)<2){
            $nameErr="Must contain at least two word";
            $name="";
        }
        elseif(!preg_match("/^[a-zA-Z-' ]*$/",$n)) {
            $nameErr = "can contain alpha numeric characters, period,dash or underscore only";
            $name="";
        }
}

$n=$_POST['name'];
if(empty($_POST["name"])){
$nameErr="Name is requied";
}
else{
    if(str_word_count($n)<2){
        $nameErr="Must contain at least two word";
        $name="";
    }
    elseif(!preg_match("/^[a-zA-Z-' ]*$/",$n)) {
        $nameErr = "can contain alpha numeric characters, period,dash or underscore only";
        $name="";
    }
}
    $p=$_POST['pass'];
    // $plen=strlen($p);

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
      }else{
          if(strlen($_POST['pass'])<8){
              $passErr="Must be more than 8 char";
              $pass="";
          }elseif (!preg_match($regex,$p)) {
            $passErr = "Must be Contains at least one special character";
            $pass="";
        }
      }
    

}

?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  <fieldset>
  <legend>LOGIN</legend>
  <br>

  User Name : 
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>

  Passoword : 
  <input type="text" name="pass" value="<?php echo $pass;?>">
  <span class="error"><?php echo $passErr;?></span>
  <br>
  <hr>

  <br>
  <input type="checkbox" name="remember"> Remember Me
  <br><br>

  <input type="submit" name="submit" value="Submit">
  <a href="#">Forgot Passoword?</a>

  </fieldset>
  <br><br>
  
  


    
</form>


</body>
</html>