<?php
  //ini_set('display_errors',1); //for MAC
  //error_reporting(E_ALL);
  require_once('phpscripts/config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
</head>
<body>
  <h1>Welcome Company Name to your admin page.</h1>
  <?php
    echo "<h2>Hello, {$_SESSION['user_name']}</h2>";
  ?>
</body>
</html>
