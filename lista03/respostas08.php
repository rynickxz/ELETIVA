<?php
    if ($_POST) {
        $frase = $_POST['frase'];
        $totalVogais = preg_match_all('/[aeiouAEIOU]/', $frase);
        
        echo "<p>A frase '$frase' possui $totalVogais vogais.</p>";
    }
?>