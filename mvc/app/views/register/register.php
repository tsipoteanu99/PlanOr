<!DOCTYPE html>
<html lang="en">
  <head>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/login.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css">

    <title>Register</title>
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
      <ul id="errors">
      </ul>
      <h1>Register</h1>
      <div>
        <label for="username">Username</label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Enter Username"
        />
        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Enter Password"
        />
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter Email" />
        <input type="submit" name="register" value="Register" id="submitbutton" />
        <a href="<?php echo URL ?>/public/?url=login">Already have an account?</a>
      </div>
    </div>

    <script>
      const form = {
        username: document.getElementById('username'),
        password: document.getElementById('password'),
        mail: document.getElementById('email'),
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

        const requestData = `username=${form.username.value}&password=${form.password.value}&email=${form.mail.value}`;

        request.open('post', '<?php echo URL ?>/public/register/registerForm');
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
        }
        else location.href = 'http://localhost/mvc/public/?url=login'; 
      }
  </script>
  </body>
</html>
