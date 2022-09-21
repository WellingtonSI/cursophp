<div class="titulo">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

print_r($agora);
echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME ,'pt_BR');
echo strftime($formatoData2,$agora->getTimestamp()).'<br>';

$amanha = new DateTime('+1 day');
echo strftime($formatoData2,$amanha->getTimestamp()).'<br>';