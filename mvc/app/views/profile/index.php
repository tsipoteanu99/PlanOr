<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/myprofilestyle.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>
  <div class=" globalwrapper">
    <div class="user-bio">
      <div class="profile-picture">
        <img src="<?php echo URL ?>/public/assets/profilepic.jpg" alt="profile-picture" />
        <h1 class="username"><?php echo $data['firstName'] . ' ' . $data['lastName'] ?></h1>
      </div>
      <h2>User Info</h2>
      <div class="bio-info-box">
        <div><i class="fa fa-camera icons"></i><span>Photos</span> <span>54</span></div>
        <div><i class="fa fa-picture-o icons">
          </i><span>Albums</span> <span>7</span></div>
        <div><i class="fa fa-heart icons"></i><span>Likes</span> <span>1280</span></div>
      </div>
    </div>

    <div class="user-content">
      <div class="album-frame">
        <p>Albums</p>
        <div class="albumForm">
          <ul id="form-message">
            <li>mesaj1</li>
          </ul>
          <input type="text" id="newAlbum" placeholder="Add new album..." />
          <button type="submit" id="btn-submit">Add new album</button>
        </div>
      </div>
      <div class="albums-box">
        <?php
        for ($i = 0; $i < $data['count']; $i++) {
          $id = $data['albums']['id'][$i];
          echo $id;
          echo "<div class='content-pictures'>
            <a href='" .  URL  . "/public/?url=profile/albumPhotos/?id=" . $id . "'><img src='" .  URL . "/public/assets/imginfo.jpg' alt='album' /></a>
            <p class = 'album-name'>" . $data['albums']['name'][$i] . "</p>
          </div>";
        }
        ?>
      </div>
    </div>
  </div>

  <script>
    const form = {
      newAlbum: document.getElementById('newAlbum'),
      submit: document.getElementById('btn-submit'),
      message: document.getElementById('form-message')
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

      const requestData = `newAlbum=${form.newAlbum.value}`;
      console.log(requestData);

      request.open('post', '<?php echo URL ?>/public/profile/newAlbum');
      request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      request.send(requestData);



      function handleResponse(responseObject) {

        console.log(responseObject);

        if (responseObject.ok) {
          location.href = '<?php echo URL ?>/public/profile/index';
        } else {
          while (form.messages.firstChild) {

            form.message.removeChild(form.message.firstChild);
          }


          const li = document.createElement('li');
          li.textContent = message;
          form.message.appendChild(li);


          form.message.style.display = "block";
        }

      }
    });
  </script>
</body>

</html>