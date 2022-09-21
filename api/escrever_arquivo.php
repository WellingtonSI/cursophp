<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt','w');
fwrite($arquivo,"Valor inicial\n");
$str = "Segunda Linha\n";
fwrite($arquivo,$str);
fclose($arquivo);

$arquivo = fopen('teste.txt','w');
fwrite($arquivo,'Novo conteúdo');
fclose($arquivo);

$arquivo = fopen('teste.txt','a');
fwrite($arquivo," com novos valores\n");
fwrite($arquivo,"Adicionando em um segunda linha");
fclose($arquivo);

$arquivo = fopen('teste.txt','x');