<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/login.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css">

  <title>Login</title>
</head>

<body>
  <nav>
    <img class="logoimage" src="<?php echo URL ?>/public/assets/logo.png" alt="logo" /></a>
    <div class="title_container">
      <h1>Plant Organiser SSM</h1>
    </div>
  </nav>
  <div class="login">
    <img src="<?php echo URL ?>/public/assets/violete.jpg" alt="violete.jpg" class="avatar" />
    <h1>Login</h1>
    <div id="form">
      <p>Username</p>
      <input type="text" placeholder="Enter Username" name="username" id="username" />
      <p>Password</p>
      <input type="password" placeholder="Enter Password" name="password" id="password" />
      <input type="submit" value="Login" id="submitbutton" />
      <a id="acc_create" href="<?php echo URL ?>/public/?url=register">Create an account!</a>
    </div>
  </div>
  <script>
    const form = {
      username: document.getElementById('username'),
      password: document.getElementById('password'),
      submit: document.getElementById('submitbutton')
    };

    form.submit.addEventListener('click', () => {
      console.log('clicked');
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

      const requestData = `username=${form.username.value}&password=${form.password.value}`;

      request.open('post', '<?php echo URL ?>/public/login/checkValidity');
      request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      request.send(requestData);
    });

    function handleResponse (response){
      console.log(response);
      if(response.ok) {
        console.log("true");
        location.href = 'http://localhost/mvc/public/?url=profile';
      }
      else console.log("false");
    }
  </script>
</body>

</html>