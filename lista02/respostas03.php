<?php
if($_POST){
    $produto = $_POST["produto"];
    if($produto > 100){
        $desconto = $produto * 0.15;
        $valorFinal = $produto - $desconto;
        echo "O valor do produto com desconto é: R$ $valorFinal";
    } else {
        echo "O valor do produto não tem desconto.";
    }
}


?>