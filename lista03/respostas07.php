<?php
    if ($_POST) {
        $palavra = $_POST['palavra'];
        $palavra_invertida = strrev($palavra);
        
        echo "<p>A palavra '$palavra' invertida é: $palavra_invertida</p>";
    }
?>