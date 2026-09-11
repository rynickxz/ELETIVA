<?php
    $taxa = $_POST["taxa"] / 100;
    $capital = $_POST["capital"];
    $periodo = $_POST["periodo"];

$montante = $capital * pow((1 + $taxa), $periodo);
    echo "O valor do montante é : $montante";
?>