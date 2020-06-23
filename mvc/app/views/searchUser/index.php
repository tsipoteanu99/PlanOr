<!DOCTYPE html>
<html>

<head>
  <title>Search Albums</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/searchStyle.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
  <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
  include($IPATH . "navbar.php"); ?>

  <div class="box">
    <h1 class="searchTitle">Search Users</h1>
    <form>
      <input type="text" name="" placeholder="Search users..." />
      <input type="submit" name="" value="Search" href="#" />
    </form>
  </div>
</body>

</html>