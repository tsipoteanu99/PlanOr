<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/myprofilestyle.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>
  <div class=" globalwrapper">
    <div class="user-bio">
      <div class="profile-picture">
        <img src="<?php echo URL ?>/public/assets/profilepic.jpg" alt="profile-picture" />
        <h1 class="username"><?php echo $data['firstName'] . ' ' . $data['lastName'] ?></h1>
      </div>
      <h2>User Info</h2>
      <div class="bio-info-box">
        <p><i class="fa fa-camera icons"></i>Posts: 1283475123</p>
        <p><i class="fa fa-user icons"></i>Followers:</p>
        <p><i class="fab fa-canadian-maple-leaf icons"></i>Favorite plants:</p>
        <p><i class="fa fa-heart icons"></i>Likes:</p>
      </div>
    </div>

    <div class="user-content">
      <div class="album-frame">
        <p>Albums</p>
      </div>
      <div class="albums-box">
        <!-- <?php
              echo $data["test"];
              for ($i = 0; $i <= 10; $i++)
                echo '<h1>' . $i . '</h1>';
              ?> -->
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>
        <div class="content-pictures">
          <a href="<?php echo URL ?>/public/?url=profile/album"><img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="asd" /></a>
        </div>

      </div>
    </div>
  </div>
</body>

</html>