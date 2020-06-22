<!DOCTYPE html>
<html lang="en">

<head>
  <title>AlbumName</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/albumPhotos.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
</head>

<body>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>
  <div class="wrapper">

    <form id="photoForm">
      <input type="file" name="file">
      <button onclick="uploadPhoto()">Upload photo</button>
    </form>

    <div class="display">
      <div class="photos">
        <div class="containerPhotos">
          <img src="<?php echo URL ?>/public/assets/profilepic.jpg" alt='album' alt=" Imagine " />
          <div class="buttons">
            <button>Informatii</button>
            <button>Sterge</button>
          </div>
        </div>

        <div class="containerPhotos">
          <img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt='album' alt=" Imagine " />
          <div class="buttons">
            <button>Informatii</button>
            <button>Sterge</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    function uploadImage() {
      fetch('<?php echo URL ?>/public/profile/uploadPhoto', {
        method: "POST",
        body: new FormData(document.getElemendById(photoForm))
      })
    }
  </script>
</body>

</html>