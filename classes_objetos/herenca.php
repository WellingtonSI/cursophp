<?php

class Pessoa {
    public $nome;
    public $idade;

    function __concstruct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada! <br>";
    }

    function __destruct(){
        echo "Tchau!!!";
    }

    public function apresentar()
    {
       echo "{$this->nome}, {$this->idade}  anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome,$idade,$login){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->login=$login;
        echo "Usuario criado!<br>";
    }

    function __destruct(){
        echo "Usuario diz:tchau!"; 
    }

    public function apresentar(){
        echo "@{$this->login}";
        //função herdada do pai (Pessoa)
        parent::apresentar();
    }
}
  
