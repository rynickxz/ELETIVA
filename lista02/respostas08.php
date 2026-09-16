<?php
if ($_POST) {
    $numero = $_POST["numero"];

    if ($numero) {
        $fatorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial = $fatorial * $i;
        }
        echo "<p>O fatorial do número é: $fatorial</p>";
    }
}
?>

