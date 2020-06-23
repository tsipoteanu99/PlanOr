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
      <div class="photos">
        <div class="containerPhotos">
          <img src="<?php echo URL ?>/public/uploads/5ef233ec557425.03493531.jpg" alt='album' alt=" Imagine " />
          <div class="buttons">
            <?php echo $data['test']; ?>
            <button href="<?php echo URL ?>/public/?url=profile/picturePage">Informatii</button>
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
    const form = {
      photo: document.getElementById('file'),
      messages: document.getElementById('form-messages'),
      submit: document.getElementById('submitbutton')
    }

    form.submit.addEventListener('click', () => {
      const request = new XMLHttpRequest();
      console.log("clicked");

      request.onload = () => {
        let responseObject = null;

        try {
          responseObject = JSON.parse(request.responseText);
        } catch (e) {
          console.error('Could not parse json');
        }

        if (responseObject) {
          handleResponse(responseObject);
        }

      };

    function handleResponse(responseObject) {
      console.log(responseObject);
      if (responseObject.ok) {
        location.href = 'http://localhost/mvc/public/?url=profile';
      }
    }
    console.log(form);
  </script>

</body>

</html>