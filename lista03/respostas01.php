<?php
    if ($_POST) {
        $palavra = $_POST['palavra'];

        $qtd = strlen($palavra);
        echo "<p>A palavra informada possui: $qtd </p>";
    }
?>