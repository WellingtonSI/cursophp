<?php
    require_once(__DIR__.'/usuario.php');

    $usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
    echo $usuario->apresentar();
    unset($usuario);