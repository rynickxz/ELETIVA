<?php
    if ($_POST) {
        $palavra = $_POST['palavra'];

        $invertida = strrev($palavra);

        if ($palavra == $invertida) {
            echo "<p>$palavra é palíndromo</p>";
        } else {
            echo "<p>$palavra não é palíndromo</p>";
        }
    }
?>