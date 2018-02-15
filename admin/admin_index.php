<?php
  //ini_set('display_errors',1); //for MAC
  //error_reporting(E_ALL);
  require_once('phpscripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="css/main.css" rel="stylesheet">
<title>CMS Portal Login</title>
</head>
<body>
  <h1>Welcome to the admin page.</h1>
  <?php
    echo "<h2>Hello, {$_SESSION['user_name']}</h2>";
    echo "<h2>Last login was on {$_SESSION['user_date']}</h2>";
  ?>
</body>
</html>
