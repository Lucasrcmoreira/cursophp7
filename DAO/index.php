<?php

require_once("config.php");


// metodo que carrega apenas um usuario
//$buscarUsuario = new Usuario();
//$buscarUsuario->selectUsuario(6);
//echo $buscarUsuario;



//método que  carrega uma lista de todos usuarios
//$listaUsuarios = Usuario::getList();
//echo json_encode($listaUsuarios);


// método que carrega uma lista de usuarios buscado pelo login
//$buscarUsuarioLogin = Usuario::search("us");

//echo json_encode($buscarUsuarioLogin);


//método que carrega usuário usando login e a senha
//$usuario = new Usuario();
//$usuario->login("macada","1239000") ;
//echo $usuario;


//metodo insert com procedure no banco mysql
//$aluno = new Usuario("lucas1","senha11");
//$aluno->insert();
//echo $aluno;

$user = new Usuario();
$user->selectUsuario(0);
echo $user;

$user->update("novousuario","1233");

echo $user;
?>