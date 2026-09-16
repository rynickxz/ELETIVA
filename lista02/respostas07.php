<?php
if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero) {
        $contador = 1;
        while ($contador <= $numero) {
            echo "<p>Valores são: $contador</p>";
            $contador++;
        }
    }
}
?>
