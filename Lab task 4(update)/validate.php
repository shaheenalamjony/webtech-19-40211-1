<?php 
session_start();

$username = "user@edu.com";
$password = "user";


$name = "user";
$email = "mail@gmail.com";
$gender = "male";
$dateOfBirth = "01/01/1990";

  
$_SESSION['pass'] = $password;
$_SESSION['email'] = $email;
$_SESSION['gender'] = $gender;
$_SESSION['username'] = $name;
$_SESSION['dateOfBirth'] = $dateOfBirth;

if(isset($_POST['login'])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];



    //$rem= $_POST['remember'];
    if($name == $username and $pass == $password){
        if(!empty($_POST['remember'])){
            setcookie('name',"$name",time()+60);
            setcookie('pass',"$pass",time()+60);
        }
        
        $_SESSION['name']=$name;
        header("location:welcome.php");
        
    }
    else{
        echo "invalid username and password<br><br>";
        echo "<a href='login.php'>Back to login page</a>";
    }

}
else{
    header("location:login.php");
    echo "invalid username and password";
}

?>