<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIT514 Demo</title>
</head>
<body>
  <div>
    <h2>Login</h2>
    <?php
      if(isset($_SESSION['login_error'])){
        echo $_SESSION['login_error'];
      }
    ?>
    <form 
      action="/KIT514 Demo/Controllers/LoginController.php" 
      method="post"
      >
      <label for="email">Email</label>
      <input type="text" name="email"/>

      <label for="password">Password</label>
      <input type="text" name="password"/>
      <button name="loginBtn" type="submit" value="login">Login</button>
    </form>
  </div>
</body>
</html>