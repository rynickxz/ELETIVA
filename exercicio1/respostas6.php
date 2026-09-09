<?php
    $valor1 = $_POST["valor1"];

    $c = ($valor1 - 32) / 1.8;
    echo "O valor em Celsius é: $c";
    