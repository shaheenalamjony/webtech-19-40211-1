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

include 'h.php';?>

<span style = "display:inline-block; width:100%;text-align:left; height: 40%;">


<?php 

if (isset($_SESSION['name'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'Account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	   echo '<b>PROFILE </b><br><br>';
	   if (isset($_SESSION['profilePic'] )){
	   	  echo '<img src="uploads/';
	   	  echo $_SESSION['profilePic'];
	   	  echo ' " alt="LOGO" height=150px width:150px>';
	   }
	   else{
	   	  echo '<img src="Upload/Upload.PNG" alt="LOGO" height="90%">';
	   }
	   echo '<a href="PROFILE PICTURE.php">Change</a><br><br>';
	     echo " Name  :".$_SESSION['name']."<br>";
	     if (isset($_SESSION['email'])){
	     	echo " Email  :".$_SESSION['email']."<br>";
	     }
	     
	     if (isset($_SESSION['gender'])){
	     	echo " Gender  :".$_SESSION['gender']."<br>";
	     }

	     if (isset($_SESSION['dateOfBirth'])){
	     	echo " Date Of Birth  :".$_SESSION['dateOfBirth']."<br>";
	     }
	    
	     echo '<hr>';
	     echo '<a href="EDIT PROFILE.php">Edit Profile</a>';
	  echo '</div>';
	echo '</div>';
	

}
else{
		$msg="error";
		header("location:viewProfile.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

