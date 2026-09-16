    <?php
        if ($_POST) {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];

            $soma = $valor1 + $valor2;

            if ($valor1 == $valor2) {
                $soma = $soma * 3
                
                echo "<p>Os valores são iguais.</p>";
                echo "<p>Resultado: $soma</p>";

            } elseif ($valor1 != $valor2) {
                echo "<p>Os valores são diferentes.</p>";
                echo "<p>Resultado: $soma</p>";

            }

        }
        ?>