<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/login.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css">

  <title>Login</title>
</head>

<body>
  <nav>
    <img class="logoimage" src="<?php echo URL ?>/public/assets/logo.png" alt="logo" /></a>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="login">
    <img src="<?php echo URL ?>/public/assets/violete.jpg" alt="violete.jpg" class="avatar" />
    <h1>Login</h1>
    <form action="<?php echo URL ?>/public/login/checkValidity" method="Post">
      <p>Username</p>
      <input type="text" placeholder="Enter Username" name="username" />
      <p>Password</p>
      <input type="password" placeholder="Enter Password" name="password" />
      <input type="submit" value="Login" />
      <a id="acc_create" href="<?php echo URL ?>/public/?url=register">Create an account!</a>
    </form>
  </div>
</body>

</html>