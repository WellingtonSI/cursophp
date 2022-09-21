<div class="titulo">Desafio Erros</div>

<?php
interface Template{
    public function metodo1();
    public function metodo2 ($parametro);
}

abstract class ClasseAbstrata{
    public function metodo3() {
        echo "Estou funcionando<br>";
    }
}

    class Classe extends ClasseAbstrata implements Template{
    function _construct ($parametro) {
    }
    public function metodo1(){
        echo "Estou funcionando, metodo 1<br>";
    }
    public function metodo2($parametro){
        echo "Estou funcionando, {$parametro}";
    }

}
$exemplo = new Classe('..');
$exemplo->metodo3();
$exemplo->metodo1();
$exemplo->metodo2('metodo 2');