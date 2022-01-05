<?php
//atribuir uma sessao ja criada session_id('codigodasessao');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);