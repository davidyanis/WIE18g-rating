<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piratfilmer</title>
    <link rel="stylesheet" href="./styles.css">
</head>
    <body>
        <div class="body-centered">
            <?php 
                include "./functionSortList.php";
                include "./header.php";
            ?>
            <main>
                <?php
                    include "./getBeskrivning.php";
                
                ?>
            </main>
            <?php 
                include "./footer.php";
            ?>
        </div>
    </body>
</html>
