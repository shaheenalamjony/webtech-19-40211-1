
<?php
// define variables and set to empty values
$newPass= $retypePass = "";
$changePass="12345678";
$changePassErr=$newPassErr=$retypePassErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $cp=$_POST['changePass'];
  $np=$_POST['newPass'];
  $rp=$_POST['retypePass'];
      
    if(empty($_POST["changePass"])){
      $changePassErr="Enter Current password";
    }else{
      if($cp!="12345678"){
        $changePassErr="Enter correct Password";
        $changePass="";
      }
    }


    if(empty($_POST["newPass"])){
      $newPassErr="Enter new password";
    } 

    if(empty($_POST["retypePass"])){
      $retypePassErr="Enter Retype password";
    }else{
      if($np==$rp){
        echo "<br><br>Password change Successfully<br><br>";
      }
      else{
        $retypePassErr="New password and confirmation password do not match";
      }
    }

    
  

}

?>




<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  <fieldset>
  <legend>CHANGE PASSWORD</legend>
  <br>
  Current Password : 
  <input type="text" name="changePass" value="<?php //echo $changePass;?>">
  <span class="error"><?php echo $changePassErr;?></span>
  <br><br>

  New Password : 
  <input type="text" name="newPass" value="<?php //echo $newPass;?>">
  <span class="error"><?php echo $newPassErr;?></span>
  <br>
  <br>

  <span class="error">Retype New Password : </span>
  <input type="text" name="retypePass" value="<?php //echo $retypePass;?>">
  <span class="error"><?php echo $retypePassErr;?></span>
  <br>
  <hr>
  
  <br><br>
  <input type="submit" name="submit" value="Submit">
  </fieldset>
  <br><br>
  
  


    
</form>


</body>
</html>