<?php
require_once("config.php");

//Se $ _SESSION for usado, use unset () para cancelar o registro de uma variável de sessão, ou seja, unset ($ _SESSION ['varname']) ;.
//unset($_SESSION['nome']);

$_SESSION["nome"] = "Rodrigo Toledo";

//session_destroy();