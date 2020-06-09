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
        <ul class="dropdown">
          <li><a href="<?php echo URL ?>/public/?url=home">Home</a></li>
          <li><a href="<?php echo URL ?>/public/?url=profile">My Profile</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Search User</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Search Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Account Settings</a></li>
        </ul>
      </li>
    </ul>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="confirmation">
    <p>
      An e-mail has been sent to your current e-mail, follow the steps there
      to succesfully change the e-mail adress of this account!
    </p>
  </div>
</body>

</html>