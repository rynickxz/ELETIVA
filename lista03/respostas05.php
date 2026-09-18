<?php
    if ($_POST) {
        $numero = $_POST['numero'];

        $raiz = sqrt($numero);
        echo "<p>A raiz quadrada do número é : $raiz </p>";
    }
?>