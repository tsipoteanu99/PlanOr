<!DOCTYPE <!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL ?>/public/css/album.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <script src="https://kit.fontawesome.com/797356307c.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
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
          <li><a href="<?php echo URL ?>/public/?url=searchAlbums">Search Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=top">Top Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=settings">Account Settings</a></li>
        </ul>
      </li>
    </ul>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="container">
    <div class="box">
      <div class="imgBox">
        <a href="<?php echo URL ?>/public/?url=profile/picturePage"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" />>
      </div>
      <div class="details">
        <div class="like-button">
          <i id="btn" class="far fa-heart likebtn"></i>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo URL ?>/public/js/album.js"></script>
</body>

</html>