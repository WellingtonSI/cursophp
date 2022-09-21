<?php
    namespace Desafio\IntDiv;


class IntDivException extends \Exception{
    public function __construct($message, $code = 0, $previous = null){
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($dividendo,$divisor){

    if($divisor === 0){
        throw new IntDivException('Não possível a divisão por 0');
    }
    if(!is_int($dividendo/$divisor)){
        throw new IntDivException('O resultado não foi um inteiro');
    }
    
    return $dividendo/$divisor;

}
