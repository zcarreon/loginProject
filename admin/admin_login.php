<?php
  //ini_set('display_errors',1); //for MAC
  //error_reporting(E_ALL);

  require_once('phpscripts/config.php');

  $ip = $_SERVER['REMOTE_ADDR']; //Gets the IP Address
  //echo $ip;
  if(isset($_POST['submit'])) {
    $username = trim($_POST['username']); //trim removes spaces at the beginning and end
    $password = trim($_POST['password']);
    if($username !== "" && $password !== "") {
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "Please fill in the required fields.";
    }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
</head>
<body>
  <h1>Welcome Company Name</h1>
  <?php
    if(!empty($message)){
      echo $message;
    }
  ?>
  <form action="admin_login.php" method="post">
    <label></label>
    <input type="text" name="username" value="">
    <label></label>
    <input type="text" name="password" value="">
    <br>
    <input type="submit" name="submit" value="Show me the money.">
  </form>
</body>
</html>
