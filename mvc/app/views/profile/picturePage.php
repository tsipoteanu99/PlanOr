<!DOCTYPE html>
<html lang="en">

<head>
    <title>PlanOr</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
    <link rel="stylesheet" href="<?php echo URL ?>/public/css/photoDescription.css" type="text/css" />
</head>

<body>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
    include($IPATH . "navbar.php"); ?>
    <div class="display">
        <div class="card">
            <div class="detaliiPoza">
                <img src="<?php echo URL ?>/public/assets/imginfo.jpg" alt="Imagine indisponibila">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ullam possimus molestias nulla hic sint laborum corrupti, architecto vero temporibus natus ipsum sequi accusantium, id, neque saepe necessitatibus consectetur
                        dicta.
                    </p>
                </div>
            </div>
            <div class="miniCard">
                <img src="<?php echo URL ?>/public/assets/miniLike.png" alt="Like">
                <p>25</p>
            </div>
            <button>
                <img src="<?php echo URL ?>/public/assets/like.png" alt="Like"> Îmi place
            </button>
        </div>

    </div>

</body>

</html>