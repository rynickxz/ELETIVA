<?php
if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero) {
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";
        }
    }
}
?>