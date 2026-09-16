<?php
if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if ($valorA == $valorB) {
        echo "Números iguais: $valorA";

    } elseif ($valorA > $valorB) {
        echo "$valorB $valorA";
        
    } else {
        echo "$valorA $valorB";

    }
}
?>