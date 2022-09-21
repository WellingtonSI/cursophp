<div class="titulo">Desafio intdiv</div>

<?php
require_once 'intdiv.php';
use Desafio\IntDiv as desafio;
//use function \Desafio\IntDiv\intdiv;

$arrayDivisor = [2,3,0];
foreach($arrayDivisor as $divisor){
    try{
        echo desafio\intdiv(8,$divisor).'<br>';   
    }catch(desafio\IntDivException $e){
        echo "{$e->getMessage()}<br>";
    }
}
echo intdiv(8,3).'<br>';
    
