<?php
if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero) {
        $controle = 1;
        while ($controle <= $numero) {
            echo "<p>Valores são: $controle</p>";
            $controle++;
        }
    }
}
?>