<?php 

class Pessoa {

     public $nome; // Atributo

     public function falar() { // Metodo

        return "Meu nome é ".$this->nome;

     }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio";
echo $glaucio->falar();