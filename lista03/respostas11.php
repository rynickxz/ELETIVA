<?php
    if ($_POST) {
        $numero = $_POST['numero'];

        $valor = number_format($numero, 2, ',', '.');

        echo "<p>Valor: R$ $valor</p>";
    }
?>