<div class="titulo">Desafio Imagens</div>

<?php
    session_start();
    $arquivos = $_SESSION['arquivos'] ?? [];

    $pastaUpload = getcwd()."/files/";
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
    if(move_uploaded_file($tmp,$arquivo)){
        echo "<br>Arquivo válido e enviado com sucesso!";
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    }else{
        echo "<br>Erro no upload de arquivo!";
    }
?>
<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>
<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(pathinfo($arquivo)['extension']==="jpeg" || pathinfo($arquivo)['extension']==="jpg"): ?>
            <li>
                <img src="../files/<?= $arquivo ?>" alt="" height="120">
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>