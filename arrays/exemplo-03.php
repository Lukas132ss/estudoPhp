<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Lukas',
    'idade' => 21
));

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 25
));

print_r($pessoas[0]['nome']);