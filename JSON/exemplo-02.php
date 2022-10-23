<?php

$json = '[{"nome":"Lukas","idade":21},{"nome":"Jo\u00e3o","idade":25}]';

$data = json_decode($json, true);

var_dump($data);