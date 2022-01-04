<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadbyId(3);

echo $usuario;

?>