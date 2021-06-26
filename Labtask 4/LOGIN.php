<html>
<body>

<?php include 'header.php';?>



<?php 

session_start();

$username="user";
$password="user";
$name = "User";
$email = "mail@gmail.com";
$gender = "male";
$dateOfBirth = "01/01/1990";
if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;  
		$_SESSION['pass'] = $password;
		
		if (!isset($_SESSION['email'])){
	     	$_SESSION['email'] = $email;
	     }
	     if (!isset($_SESSION['gender'])){
	     	$_SESSION['gender'] = $gender;
	     }
	     if (!isset($_SESSION['name'])){
	     	$_SESSION['name'] = $name;
	     }
	     if (!isset($_SESSION['dateOfBirth'])){
	     	$_SESSION['dateOfBirth'] = $dateOfBirth;
	     }
		 
		


	     header("location:dashboard.php");
	}
	else{
		$msg="username or password invalid";
	}


}

?>
<span style = "display:inline-block; width:100%;text-align:left; height: 100%; padding:10px">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>User name</td>
			<td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])){echo $_POST['uname'];} ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="pass" value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];} ?>"></td>
		</tr>
		<tr>
			<td align="=right" colspan="2"><input type="checkbox" name="remember">Remember me</td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="Submit"></td>
		</tr>
	</table>
	
</form>





<?php include 'footer.php';?>

</span> 


</body>
</html>

<?php 

if(!empty($_POST['remember'])){
	setcookie("name",$_POST['uname'],time()+60);
	setcookie("pass",$_POST['pass'],time()+60);
}else{
	setcookie("uname","");
	setcookie("pass","");
}

?>