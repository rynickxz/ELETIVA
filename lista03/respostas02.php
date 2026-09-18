<?php
    if ($_POST) {
        $palavra = $_POST['palavra'];

        echo "<p>Maiúsculo: ". strtoupper($palavra) ."</p>";
        echo "<p>Minúsculo: " . strtolower($palavra) . "</p>";
    }
?>