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
            <h3>Välj film</h3>
            <form method="POST" action="./details.php">
                <select name="movieList">
                    <option value="Fast and furious">Fast and furious</option>
                    <option value="JR">Jack Reacher</option>
                    <option value="BW">Bay Watch</option>
                    <option value="JL">Justice League</option>
                    <option value="Avengers">Avengers</option>
                </select>
                <button type="submit" name="submit">Se beskrivning -></button>
            </form>
            
            </main>
            <?php 
                include "./footer.php";
            ?>
        </div>
    </body>
</html>
