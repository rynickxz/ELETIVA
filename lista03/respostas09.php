<?php
    if ($_POST) {
        $frase = $_POST['frase'];
        $frase_sem_espacos = str_replace(' ', '', $frase);
        $frase_sem_espacos_no_final = trim($frase);

        echo "<p>Frase original: '$frase'</p>";
        echo "<p>Frase sem espaços no início e no final: '$frase_sem_espacos_no_final'</p>";
        echo "<p>Frase sem espaços: '$frase_sem_espacos'</p>";
    }
?>