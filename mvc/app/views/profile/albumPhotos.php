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

  <div class="globalWrapper">
    <div class="tagWrapper">
      <div class="tagForm">
        <input type="text" id="addTag" placeholder="Add new tag..." />
        <button type="submit" id="btn-submit">Add new tag</button>
      </div>
      <ul>
        <?php foreach ($data['tags']['name'] as $tags) {
          echo "<li>" . $tags . "</li><br>";
        } ?>
      </ul>
    </div>

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
<<<<<<< HEAD
            <button onclick='window.location=`" . URL . "/public/?url=profile/picturePage/?id=" .$data['photo']['id'][$i] . "`;'>Informatii</button>
            <button>Sterge</button>
=======
            <button onclick='window.location=`" . URL . "/public/?url=profile/picturePage/?id=" . $data['photo']['id'][$i] . "`;'>Informatii</button>
>>>>>>> lastBranch
            </div>
          </div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
    const form = {
      addTag: document.getElementById('addTag'),
      submit: document.getElementById('btn-submit'),

    };

    form.submit.addEventListener('click', () => {
      const request = new XMLHttpRequest();


      request.onload = () => {

        console.log(request.responseText);
        let responseObject = null;

        try {
          responseObject = JSON.parse(request.responseText);
        } catch (e) {
          console.error('Could not parse JSON!');
        }

        if (responseObject) {
          handleResponse(responseObject);
        }

      };

      const requestData = `addTag=${form.addTag.value}`;
      console.log(requestData);

      request.open('post', "<?php echo URL . '/public/?url=profile/newTag/' . $data['test'] ?>");
      request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      request.send(requestData);



      function handleResponse(responseObject) {

        console.log(responseObject);

        if (responseObject.ok) {
          location.href = "<?php echo URL . '/public/?url=profile/albumPhotos/?id=' . $data['test'] ?>";
        }


      }
    });
  </script>
</body>

</html>