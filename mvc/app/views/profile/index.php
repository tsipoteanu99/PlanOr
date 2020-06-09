<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Profile</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/myprofilestyle.css" />
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
          <li><a href="#">My Profile</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchUser">Search User</a></li>
          <li><a href="<?php echo URL ?>/public/?url=searchAlbums">Search Albums</a></li>
          <li><a href="<?php echo URL ?>/public/?url=settings">Account Settings</a></li>
        </ul>
      </li>
    </ul>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="globalwrapper">
    <div class="user-bio">
      <div class="profile-picture">
        <img src="<?php echo URL ?>/public/assets/profilepic.png" alt="profile-picture" />
      </div>
      <h1 class="username">Sipoteanu Tiberiu Constantin</h1>
      <h2>User Info</h2>
      <hr />
      <div class="bio-info-box">
        <p><i class="fa fa-camera icons"></i>Posts: 1283475123</p>
        <hr />
        <p><i class="fa fa-user icons"></i>Followers:</p>
        <hr />
        <p><i class="fab fa-canadian-maple-leaf icons"></i>Favorite plants:</p>
        <hr />
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