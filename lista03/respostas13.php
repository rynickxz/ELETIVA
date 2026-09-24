<?php
    if ($_POST) {
        $frase = $_POST['frase'];
        $palavras = explode(' ', $frase);

        $maior = '';

        foreach ($palavras as $palavra) {
            if (strlen($palavra) > strlen($maior)) {
                $maior = $palavra;
            }
        }

        echo "<p>Total de palavras: " . count($palavras) . "</p>";
        echo "<p>Maior palavra: $maior</p>";
    }
?>