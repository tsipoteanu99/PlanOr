<!DOCTYPE html>
<html>

<head>
  <title>Search Albums</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/searchStyle.css" />
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
          <li><a href="#">Search User</a></li>
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

  <div class="box">
    <h1 class="searchTitle">Search Users</h1>
    <form>
      <input type="text" name="" placeholder="Search users..." />
      <input type="submit" name="" value="Search" href="#" />
    </form>
  </div>
</body>

</html>