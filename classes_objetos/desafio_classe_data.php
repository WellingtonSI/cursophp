<div class="titulo">Desafio Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
    
}
$data = new Data();
$data->apresentar();