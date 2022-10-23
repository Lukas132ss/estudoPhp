<?php

function ola($texto = "mundo", $periodo = "Bom dia") {

    return "Olá $texto! $periodo<br>";

}

echo ola();
echo ola("Lukas", "Boa tarde");
echo ola("João", "Boa noite");