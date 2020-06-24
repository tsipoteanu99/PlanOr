<!DOCTYPE html>
<html lang="en">

<head>
    <title>PlanOr</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL ?>/public/css/navbar.css" />
    <link rel="stylesheet" href="<?php echo URL ?>/public/css/photoDescription.css" type="text/css" />
    <script src="https://kit.fontawesome.com/ce66004dc2.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/mvc/app/views/";
    include($IPATH . "navbar.php"); ?>

    <button onClick="getBack()">Go Back</button>

    <div class="display">
        <div class="card">
            <div class="detaliiPoza">
                <?php echo "<img src='" . URL . "/public/uploads/" . $data['path'] . "'" . "alt='Imagine indisponibila'>"; ?>
                <div class="text">
                    <?php echo "<p>" .  $data['desc'] . "</p>" ?>
                </div>
            </div>
            <div class="miniCard">
                <img src="<?php echo URL ?>/public/assets/miniLike.png" alt="Like">
                <?php echo "<p>" .  $data['likes'] . "</p>" ?>
            </div>
            <button>
                <img src="<?php echo URL ?>/public/assets/like.png" alt="Like"> Îmi place
            </button>
            <button id='delete'>Sterge</button>
        </div>

    </div>
    <script>
        const form = {
            delete: document.getElementById('delete'),
        };

        console.log(form);

        form.delete.addEventListener('click', () => {
            console.log("click");

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

            request.open('post', "<?php echo URL . '/public/?url=profile/deletePhoto/' . $data['test'] ?>");
            request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


            function handleResponse(responseObject) {

                console.log(responseObject);

                if (responseObject.ok) {
                    location.href = '<?php echo URL ?>/public/profile/albumPhotos';
                }
            }
        })

        function getBack() {
            window.history.go(-1);
        }
    </script>
</body>

</html>