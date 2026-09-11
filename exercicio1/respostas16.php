<?php
    $taxa = $_POST["taxa"] / 100;
    $capital = $_POST["capital"];
    $periodo = $_POST["periodo"];

    $juros_simples = $capital * $taxa * $periodo;
    echo "Os juros simples são: $juros_simples";
?>