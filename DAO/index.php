<?php

require_once("config.php");

$buscarUsuario = new Usuario();

$buscarUsuario->loadbyId(6);

echo $buscarUsuario;

?>