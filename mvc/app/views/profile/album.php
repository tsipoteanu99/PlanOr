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
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>
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