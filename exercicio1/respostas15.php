<?php
    $preco = $_POST["preco"];
    $percentual = $_POST["percentual"];

    $desconto = $preco * ($percentual / 100);
    $preco_final = $preco - $desconto;
    echo "O desconto calculado é : $preco_final";
    