
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .logo{
            float: left;
        }
        .nav{
            float: right;
        }
        .navitem{
            margin-right: 10px;;
        }
        * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
    </style>
</head>
<body>
    <fieldset>
    <div class="logo">
        <img style="width: 100px; height:70px;" src="" alt="company pic">
    </div>
    <div class="nav">
    <?php

    if (isset($_SESSION['name'])) {
        echo "<a href='welcome.php'>Home | </a>";
    echo " Logged in as ";
    echo '<a href="welcome.php">';
    echo $_SESSION["name"];
    echo '</a>  | ';
    echo "<a href='logout.php'>Logout</a>";
    
    echo"<br><br>";
    
    




    }
    else{
    echo '
    <a href="login.php">Login</a>   |  
    <a href="registration/store.php">registration</a> '
    ;   
    }
?>
</div>
</fieldset>
</body>
</html>

