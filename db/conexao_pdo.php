<?php

function novaConexao($banco = 'curso_php'){
    $servidor = '172.19.0.2';
    $usuario = 'root';
    $senha = 'root';

    try{
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
        return $conexao;
    }catch(PDOException $error){
        die('Erro: '. $error->getMessage());
    }

}