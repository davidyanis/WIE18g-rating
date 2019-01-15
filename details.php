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
            <div class="breadcrumb">
                <li><a href="#"> Välkommen &nbsp;/</a></li> 
                <li><a href="#"> Topp 10  &nbsp;/</a></li>
                <li><a href="#"> Beskrivning </a></li> 
            </div>
            <h4>
                <?php
                    include "./getBeskrivning.php";
                
                ?>
            </h4>
            </main>
            <?php 
                include "./footer.php";
            ?>
        </div>
    </body>
</html>
