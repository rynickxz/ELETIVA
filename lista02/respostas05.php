<?php
if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero) {
        for ($i = 1; $i <= $numero; $i++) {
            echo "<p>Valores são: $i</p>";
        }
    }
}
?>

