<div class="titulo">PDO: Inserir</div>

<?php 
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro
    (nome,email,nascimento,site,filhos,salario)
    VALUES(
        'Guilherme Filho 2',
        'guidagalera2@gmail.com',
        '1999-7-25',
        'http://guidagalera2.com.br',
        1,
        3700
    )";

$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
}else{
    echo $conexao->errorCode().'<br>';
    print_r($conexao->errorInfo());
}

unset($conexao);

