<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo URL ?>/public/css/forms.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>
  <div class="wrapper">
    <div class="left">
      <div class="menu">
        <li class="item" id="Username">
          <a href="<?php echo URL ?>/public/?url=settings/username" class="btn"><i class="fa fa-user"></i> Change Name</a>
        </li>

        <li class="item" id="Parola">
          <a href="<?php echo URL ?>/public/?url=settings/password" class="btn" style="background-color: green !important; transform: translate(5%, 0%);"><i class="fa fa-envelope"></i> Change Password</a>
        </li>

        <li class="item" id="E-mail">
          <a href="<?php echo URL ?>/public/?url=settings/mail" class="btn"><i class="fas fa-cog"></i> Change E-mail</a>
        </li>
      </div>
    </div>

    <div class="schimbare">
      <div id="form">
        <ul id="errors">
        </ul>
        <p>Current password</p>
        <input type="password" placeholder="Enter your current password" id="current"/>
        <p>New Password</p>
        <input type="password" placeholder="Enter your new password" id="newpass" />
        <p>Confirm Password</p>
        <input type="password" placeholder="Confirm your new password" id="confirm" />
        <input type="submit" value="Change password" id="submitbutton" />
      </div>
    </div>
  </div>

  <script>
     const form = {
        current: document.getElementById('current'),
        newpassword: document.getElementById('newpass'),
        confirm: document.getElementById('confirm'),
        errors: document.getElementById('errors'),
        submit: document.getElementById('submitbutton')
      };

      form.submit.addEventListener('click', () => {
        const request = new XMLHttpRequest();


        request.onload = () => {
          let response = null;

          try{
            response = JSON.parse(request.responseText);
          }catch (e){
            console.error('could not parse JSON!');
          }

          if(response){
            handleResponse(response);
          }

        };

        const requestData = `current=${form.current.value}&newpass=${form.newpassword.value}&confirm=${form.confirm.value}`;

        request.open('put', '<?php echo URL ?>/public/settings/changePassword');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.send(requestData);
      });

      function handleResponse (response){
        console.log(response);
        if(!response.ok) {
          while(form.errors.firstChild){
            form.errors.removeChild(form.errors.firstChild);
          }

          response.errors.forEach((error) => {
            const li = document.createElement('li');
            li.textContent = error;
            form.errors.appendChild(li);
          });

          form.errors.style.display = "block";
          form.errors.style.backgroundColor = "rgba(255, 200, 200, 1)";
          form.errors.style.color = "red";
          form.errors.style.border = "1px solid red";
        }
         else{
          while(form.errors.firstChild){
            form.errors.removeChild(form.errors.firstChild);
          }

          response.errors.forEach((error) => {
            const li = document.createElement('li');
            li.textContent = error;
            form.errors.appendChild(li);
          });

          form.errors.style.display = "block";
          form.errors.style.backgroundColor = "rgba(0,255,0,0.3)";
          form.errors.style.color = "black";
          form.errors.style.border = "1px solid green";

         }
      }
  </script>
</body>

</html>