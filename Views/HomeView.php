<?php
session_start();
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <h1>Welcome Back to Home, <?php echo $user['name']?></h1>
  <table>
    <tr>
      <td>ID</td>
      <td>:</td>
      <td><?php echo $user['id']?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><?php echo $user['name']?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?php echo $user['email']?></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><?php echo $user['password']?></td>
    </tr>
  </table>
</body>
</html>