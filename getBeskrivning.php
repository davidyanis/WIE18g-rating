<?php
    include "./arrayList.php";
    if(isset($_POST["submit"])) {
            foreach ($netflix as $key => $value) {
                if($key == $_POST["movieList"]) {
                echo "<strong>$key</strong>". "<br>". $value;
            }
        }
    }
?>