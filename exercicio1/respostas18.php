<?php
    $dias = $_POST["dias"];

    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;

    $relogio = "Horas: $horas, Minutos: $minutos, Segundos: $segundos";
    echo "O valor dos dias em horas, minutos e segundos é: $relogio";
?>