 <?php
    $altura = $_POST["altura"];
    $largura = $_POST["largura"];

    $perimetro = 2 * ($altura + $largura);
    echo "O valor da área é: $perimetro";
    