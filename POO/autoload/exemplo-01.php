<?php

function my_autoload($nomeClasse) {
    require_once ( "$nomeClasse.php");
}
spl_autoload_register("my_autoload");

$carro = new DelRey();

$carro->acelerar(80);
