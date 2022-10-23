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


echo json_encode($pessoas);