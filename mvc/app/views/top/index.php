<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL ?>/public/css/top.css" rel="stylesheet" />
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
  <div class="wrapper">
      <header>Top albums:</header>
      <div class="table">
        <div class="row">
          <div class="cell desc number">#</div>
          <div class="cell image desc">Image</div>
          <div class="cell name desc">Name</div>
          <div class="cell user desc">User</div>
          <div class="cell likes desc">Likes</div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">1</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Default User</div></div>
          <div class="cell item itemlikes"><div class="itemins">85</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">2</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">User</div></div>
          <div class="cell item itemlikes"><div class="itemins">61</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">3</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante Carnivore</div></div>
          <div class="cell item"><div class="itemins">Default User3</div></div>
          <div class="cell item itemlikes"><div class="itemins">55</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">4</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante</div></div>
          <div class="cell item"><div class="itemins">Admin</div></div>
          <div class="cell item itemlikes"><div class="itemins">15</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">5</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Def</div></div>
          <div class="cell item itemlikes"><div class="itemins">2</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">6</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Def</div></div>
          <div class="cell item itemlikes"><div class="itemins">2</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">7</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Def</div></div>
          <div class="cell item itemlikes"><div class="itemins">2</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">8</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Def</div></div>
          <div class="cell item itemlikes"><div class="itemins">2</div></div>
        </div>
        <div class="row row-item">
          <div class="cell item">
            <div class="itemins">9</div>
          </div>
          <div class="cell item itemimgdiv">
            <img src="<?php echo URL ?>/public/assets/imginfo.jpg" class="itemimage">
          </div>
          <div class="cell item"><div class="itemins">Plante medicinale</div></div>
          <div class="cell item"><div class="itemins">Def</div></div>
          <div class="cell item itemlikes"><div class="itemins">2</div></div>
        </div>
      </div>
  </div>
</body>

</html>