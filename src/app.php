<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Combizera\Solid\CadastrarUsuario;
use Combizera\Solid\ControladorDeEmail;

$cadastrarUsuario = new CadastrarUsuario('1',  'Ygor', 'ygor@gmail.com');
$controladorDeEmail = new ControladorDeEmail();

if($controladorDeEmail->validarEmail($cadastrarUsuario->email)){
    echo "Email válido para o usuário $cadastrarUsuario->nome" . PHP_EOL;

    $controladorDeEmail->enviarEmail($cadastrarUsuario->email, "Seja bem vindo");
} else {
    echo "Email inválido para o usuário $cadastrarUsuario->email" . PHP_EOL;
}