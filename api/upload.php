<div class="titulo">Upload</div>

<?php
    print_r($_FILES);
    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = dirname(__FILE__).'/image/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload.$nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp,$arquivo)){
            echo '<br>Arquivo válido e enviado com sucesso!<br>';
        }else{
            echo '<br>Erro no upload de arquivo!<br>';
        }
    }
?>
 <form action="#" method="post" enctype="multipart/form-data" type="file">
    <input name="arquivo" type="file">
    <button>Enviar</button>
    
 </form>
 <style>
    input,button{
        font-size: 1.2rem;
    }
 </style>