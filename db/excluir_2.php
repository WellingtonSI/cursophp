<div class="titulo">Excluir Registro #02</div>

<?php
require_once "conexao.php";

    $sql = "SELECT id,nome,email,nascimento FROM cadastro";
    $conexao = novaConexao();

    if($_GET['excluir']){
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i",$_GET['excluir']);
        $stmt->execute();
    }

    $resultado  = $conexao->query($sql);
    $registros = [];

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            $registros[]  = $row;
        }
    }elseif($conexao->error){
        echo "Erro : ".$conexao->error;
    }

$conexao->close();
?>
<table class="table table-hover">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= 
                        date('d/m/Y',strtotime($registro['nascimento']))  
                    ?>
                </td>
                <td><?= $registro['email'] ?></td>
                <td><a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<style>
    table > * {
        font-size: 1.2rem;
    }
</style>