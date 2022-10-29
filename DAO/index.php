<?php

require_once("config.php");

// Carrega um usuáro
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// $lista = Usuario::getList();
// echo json_encode($lista);

// // Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("Lu");
// echo json_encode($search);

// Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root","ABCDE");
// echo $usuario;

// Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// Alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(11);
// $usuario->update("professor", "prof123");
// echo $usuario;

// Deletar um usuário
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->delete();

echo $usuario;