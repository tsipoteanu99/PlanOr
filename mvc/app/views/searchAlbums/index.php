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
    <h1 class="searchTitle">Search Albums</h1>
    <form method="get" action="<?php echo URL ?>/public/searchAlbums/findAlbumFromTag">
      <input type="text" name="input" placeholder="Search albums..." />
      <input type="submit" value="Search" />
    </form>
    <ul class=results>
      <?php
      if (!empty($data['albums']))
        foreach ($data['albums'] as $val) {
          echo "<li>" . $val . "</li>";
        }
      ?>
    </ul>
  </div>
</body>

</html>