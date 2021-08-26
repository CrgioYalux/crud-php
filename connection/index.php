<?php 
  require('../vendor/autoload.php');

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->safeLoad();

  $server = $_ENV['SERVER'];
  $server_user = $_ENV['SERVER_USER'];
  $server_pass = $_ENV['SERVER_PASS'];
  $db_name = $_ENV['DB_NAME'];

  $connection = mysqli_connect($server, $server_user, $server_pass, $db_name);

  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  else {
    echo "<script>console.log('Connected to DB')</script>";
  }
?>