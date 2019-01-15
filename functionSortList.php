<?php
    function sortList() {
        include "./arrayList.php";
        asort($netflix);

        foreach($netflix as $value ) {
            echo "<br> $value <br>";
        }
    }
?>