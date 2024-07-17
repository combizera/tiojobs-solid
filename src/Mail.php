<?php

namespace Combizera\Solid;

class Mail
{
    public function send(string $email, string $message): void
    {
        echo "=====================" . PHP_EOL;
        echo "Email enviado com sucesso para $email" . PHP_EOL;
        echo "=====================";
    }

}