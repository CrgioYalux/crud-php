<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/styles.css">
  <title>Register</title>
</head>
<body>
  <div>
    <form action="" method="post">
      <label for="e_name" class="e_name_container">
        Name
        <input class="e_name" type="text" name="e_name" id="e_name" placeholder="Username" required>
      </label>
      <label for="e_email" class="e_email_container">
        Email
        <input class="e_email" type="text" name="e_email" id="e_email" placeholder="Email" required>      
      </label>
      <label for="e_phone" class="e_phone_container">
        Phone
        <input class="e_phone" type="tel" name="e_phone" id="e_phone" pattern="[+][0-9]{2}-[0-9]{3}-[0-9]{4}-[0-9]{3}" placeholder="Phone" required> 
        <small class="e_phone_format">Format: +12-345-6789-101</small>
      </label>
      <label for="e_pass" class="e_pass_container">
        Password
        <input class="e_pass" type="password" name="e_pass" id="e_pass" placeholder="Password" required>
      </label>
      <input class="form_submit" type="submit" value="Register" name="form_submit">
    </form>
    <br>
    <p>or <a href="../login/index.php"><strong>Login into your account</strong></a></p>
  </div>
</body>
</html>