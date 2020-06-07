<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="<?php echo URL ?>/public/css/index.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="<?php echo URL ?>/public/css/navbar.css" type="text/css" />
</head>

<body>
    <nav>
        <a href="#">
            <img class="logoimage" src="<?php echo URL ?>/public/assets/logo.png" alt="logo" /></a>
        <div class="title_container">
            <h1>Plant Organiser SSM</h1>
        </div>
    </nav>

    <div class="middle">
        <ul class="menu">
            <li class="item" id="Profil">
                <a href="#Profil" class="btn"><i class="fa fa-user"></i>Profil</a>
                <div class="smenu">
                    <a href="<?php echo URL ?>/public?url=profile">Profilul meu</a>
                </div>
            </li>

            <li class="item" id="Albume">
                <a href="#Albume" class="btn"><i class="fas fa-search"></i>Cautare</a>
                <div class="smenu">
                    <a href="<?php echo URL ?>/public?url=searchUser">Cauta utilizatori</a>
                    <a href="<?php echo URL ?>/public?url=searchAlbums">Cauta albume</a>
                </div>
            </li>

            <li class="item" id="Setari">
                <a href="#Setari" class="btn"><i class="fas fa-cog"></i>Setari</a>
                <div class="smenu">
                    <a href="<?php echo URL ?>/public?url=settings">Schimbare date</a>
                </div>
            </li>

            <li class="item">
                <a class="btn" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </li>
        </ul>
    </div>
</body>

</html>