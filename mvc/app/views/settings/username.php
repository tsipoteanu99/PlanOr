<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL ?>/public/css/forms.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <a href="<?php echo URL ?>/public/?url=home">
      <img class="logoimage" src="<?php echo URL ?>/public/assets/logo.png" alt="logo" /></a>
    <ul>
      <li>
        <a class="fas fa-bars dropdown" href="#"></a>
        <ul>
          <li><a href="<?php echo URL ?>/public/?url=home">Home</a></li>
          <li><a href="<?php echo URL ?>/public/?url=profile">My Profile</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Search User</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Search Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=top">Top Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Account Settings</a></li>
        </ul>
      </li>
    </ul>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="wrapper">
    <div class="left">
      <div class="menu">
        <li class="item" id="Username">
          <a href="<?php echo URL ?>/public/?url=settings/username" class="btn" style="background-color: green !important; transform: translate(5%, 0%);"><i class="fa fa-user"></i> Change Username</a>
        </li>

        <li class="item" id="Parola">
          <a href="<?php echo URL ?>/public/?url=settings/password" class="btn"><i class="fa fa-envelope"></i> Change Password</a>
        </li>

        <li class="item" id="E-mail">
          <a href="<?php echo URL ?>/public/?url=settings/mail" class="btn"><i class="fas fa-cog"></i> Change E-mail</a>
        </li>
      </div>
    </div>
    <script>
      function test() {
        window.location.replace("http://localhost/mvc/public/?url=settings/confirmation");
      }
    </script>

    <div class="schimbare">
      <form action="http://localhost/mvc/public/?url=settings/confirmation">
        <p>Username</p>
        <input type="text" placeholder="Enter your username" />
        <p>New Username</p>
        <input type="text" placeholder="Enter your new username" />
        <p>Password</p>
        <input type="password" placeholder="Enter Password" />
        <input type="submit" value="Change username" href="#" />
      </form>

    </div>
  </div>
  <script src="<?php echo URL ?>/public/js/album.js"></script>
</body>

</html>