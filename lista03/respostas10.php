<?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $iniciais = '';
        $palavras = explode(' ', $nome);

        foreach ($palavras as $palavra) {
            $iniciais .= substr($palavra, 0, 1) . '.';
        }

        echo "<p>Nome completo: '$nome'</p>";
        echo "<p>Iniciais: $iniciais</p>";
    }
?>