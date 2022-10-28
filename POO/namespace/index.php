<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lukas Santos");
$cad->setEmail("lukas@testeblabla.com.br");
$cad->setSenha("12313");

$cad->registrarVenda();

// echo $cad;