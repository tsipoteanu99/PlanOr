<!DOCTYPE html>
<html lang="en">
  <head>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css">

    <title>Register</title>
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
      <h1>Register</h1>
      <form method="POST" action="<?php echo URL ?>/public/register/registerForm">
        <label for="username">Username</label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Enter Username"
        />
        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter Password"
        />
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter Email" />
        <input type="submit" name="register" value="Register" />
        <a href="<?php echo URL ?>/public/?url=login">Already have an account?</a>
      </form>
    </div>
  </body>
</html>
