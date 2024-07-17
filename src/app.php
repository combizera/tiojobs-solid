<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Combizera\Solid\CreateUser;
use Combizera\Solid\Controller\Email;

$createUser = new CreateUser('1',  'Ygor', 'ygor@gmail.com');
$email = new Email();

if($email->validateEmail($createUser->email)){
    echo "Email válido para o usuário $createUser->name" . PHP_EOL;
    $email->sendEmail($createUser->email, "Seja bem vindo");
} else {
    echo "Email inválido para o usuário $createUser->email" . PHP_EOL;
}