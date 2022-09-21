<div class="titulo">Desafio Recursividade</div>

<?php

$array = [1,2,[3,4,5],6,[7,[8,9]]];

// print_r($array);


function percorrerArray($array,$nivel ='>'){
    
    foreach ($array as $elemento) {
        if(is_array($elemento)){
            percorrerArray($elemento,$nivel.$nivel[0]);

        }else{
            echo "$nivel $elemento</br>";
        }
    }
}
percorrerArray($array);