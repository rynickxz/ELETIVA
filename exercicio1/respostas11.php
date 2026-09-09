<?php
    $base = $_POST["base"];
    $expoente = $_POST["expoente"];

    $elevar = pow($base, $expoente);
    echo "O valor da base elevado ao expoente é: $elevar";
    