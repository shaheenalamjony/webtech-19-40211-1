<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: 10px;
  height: 50%; 
}
</style>
</head>
<body>

<?php 
session_start();

include 'header.php';
?>

<span style = "display:inline-block; width:100%;text-align:left; height: 40%;">


<?php 



// if(!empty($_POST['remember'])){
//     setcookie("name",$_POST['uname'],time()+60);
//     setcookie("pass",$_POST['pass'],time()+60);
//     echo "Cookie set successfully";
//     echo "<br>welcome to ".$_SESSION['uname'];
// }else{
//     setcookie("uname","");
//     setcookie("pass","");
//     echo "Cookie not set";
// 	echo "<br>welcome to ".$_SESSION['uname'];
// 	print_r($_POST);
//}

if (isset($_SESSION['uname'])) {

	

	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'Account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	     echo "<h2> Welcome ".$_SESSION['name']."</h2>";
	  echo '</div>';
	echo '</div>';
	

}
else{
		$msg="error";
		header("location:LOGIN.php");
	}

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>


