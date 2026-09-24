<?php
    if ($_POST) {
        $email = $_POST['email'];

        $partes = explode('@', $email);
        $dominio = $partes[1];

        echo "<p>Domínio: $dominio</p>";
    }
?>