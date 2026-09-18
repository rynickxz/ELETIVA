<?php
    if ($_POST) {
        $palavra1 = $_POST['palavra1'];
        $palavra2 = $_POST['palavra2'];

        if (strpos($palavra1, $palavra2) !== false) {
            echo "<p>A segunda palavra está contida na primeira </p>";
        } else {
            echo "<p>A segunda palavra não está contida na primeira </p>";
        }
    }
?>