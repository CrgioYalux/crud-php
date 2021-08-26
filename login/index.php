<?php require('../connection/index.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Login</title>
</head>
<body>
  <div>
    <form action="" method="post">
      <input class="u_name" type="text" name="u_name" id="u_name" placeholder="Username" required>
      <input class="u_pass" type="password" name="u_pass" id="u_pass" placeholder="Password" required>
      <input class="form_submit" type="submit" value="Login" name="form_submit">
    </form>
    <br>
    <p>or <a href="../register/index.php"><strong>Create an account</strong></a></p>
  </div>
</body>
</html>