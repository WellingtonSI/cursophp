<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome,nascimento,email,site,filhos,salario)
VALUES (
    'João',
    '1995-11-08',
    'email5@gmail.com',
    'https://site5.com.br',
    4,
    1900
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro: " .$conexao->error;
}

$conexao->close();