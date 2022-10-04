<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);

if($stmt->execute([':id' => 9])){
    print_r("Sucesso!");
}else{
    echo "Error! ";
    print_r($stmt->errorInfo());
}

unset($conexao);