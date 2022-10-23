<?php

require_once("config.php");

echo session_save_path();

echo "<br />";

var_dump(session_status());

echo "<br />";

switch (session_status()) {

    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitad ";
        break;

    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas, mas não existe ";
        break;

    case PHP_SESSION_ACTIVE:
        echo "As sessões estão habilitadas e existe. ";
        break;
}