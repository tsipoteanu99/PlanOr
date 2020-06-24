<!DOCTYPE html>
<html>

<head> </head>

<body>
  <nav>
    <a href="<?php echo URL ?>/public/?url=home">
      <img class="logoimage" src="<?php echo URL ?>/public/assets/logo.png" alt="logo" /></a>
    <ul>
      <li>
        <a class="fas fa-bars dropdown" href="#"></a>
        <ul>
          <li><a href="<?php echo URL ?>/public/?url=home">Home</a></li>
          <li>
            <a href="<?php echo URL ?>/public/?url=profile">My Profile</a>
          </li>
          <li>
            <a href="
            <?php
            echo
              URL
            ?>/public/?url=searchUser">Search User</a>
          </li>
          <li>
            <a href="<?php echo URL ?>/public/?url=searchAlbums">Search Albums</a>
          </li>
          <li><a href="<?php echo URL ?>/public/?url=top">Top Albums</a></li>
          <li>
            <a href="<?php echo URL ?>/public/?url=settings">Account Settings</a>
          </li>
          <li>
            <a href="<?php echo URL ?>/public/?url=doc">Documentatie</a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
    <a class="logout" href="<?php echo URL ?>/public/?url=logout"><i class="fa fa-sign-out" aria-hidden="true"></i>
    </a>
  </nav>
</body>

</html>