<?php

function novaConexao($banco = 'curso_php'){
    $servidor = '172.19.0.2'; //trocar pra "127.0.0.1" caso utilize xampp|mamp, ou utilizar o ip correto que está marcado nas configurações do container do mysql ( "docker inspect NAME|ID" para saber o ip correto) 
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if($conexao->connect_error){
        die('Erro: '. $conexao->connect_error);
    }

    return $conexao;
}