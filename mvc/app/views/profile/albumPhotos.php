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

    <form id="photoForm" method='POST' action='<?php echo URL . "/public/profile/uploadPhoto/" . $data['test'] ?>' enctype="multipart/form-data">
      <ul id="form-messages">

      </ul>
      <input type="file" id="file" name="file">
      <button type="submit" id="submitbutton" name="submit">Upload photo</button>
    </form>

    <div class="display">
      <div class='photos'>
        <?php for ($i = 0; $i < $data['count']; $i++) {
          echo
            "
        <div class='containerPhotos'>
          <img src='" . URL . "/public/uploads/" . $data['photo']['path'][$i] . "' alt='album' alt=' Imagine ' />
          <div class='buttons'>
            <button onclick='window.location=`" . URL . "/public/?url=profile/picturePage/?id=" .$data['photo']['id'][$i] . "`;'>Informatii</button>
            <button>Sterge</button>
            </div>
          </div>";
        }
        ?>
      </div>
    </div>
  </div>
  </div>


</body>

</html>