<?php
    if ($_POST) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        date_default_timezone_set("America/Sao_Paulo");
        if(checkdate($mes, $dia, $ano)) {
            echo "<p>Data válida</p>";
        } else {
            echo "<p>Data inválida</p>";
        }
    }
?>