<?php

// include "inc/exemplo-01.php"; tenta funcionar mesmo se o arquivo não exista
require "inc/exemplo-01.php"; // obriga que o arquivo exista.

$resultado = somar(10, 25);

echo $resultado;
