<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Combizera\Solid\CadastrarUsuario;

$cadastrarUsuario = new CadastrarUsuario('1',  'Ygor', 'ygor@gmail.com');

if($cadastrarUsuario->validarEmail($cadastrarUsuario->email)){
    echo "Email válido para o usuário $cadastrarUsuario->nome" . PHP_EOL;

    $cadastrarUsuario->enviarEmail($cadastrarUsuario->email, "Seja bem vindo");
} else {
    echo "Email inválido para o usuário $cadastrarUsuario->email" . PHP_EOL;
}