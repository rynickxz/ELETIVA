<?php
    $quilometros = $_POST["quilometros"];

    $conversao = $quilometros * 0.621371;
    echo "A conversão em milhas é : $conversao";
    