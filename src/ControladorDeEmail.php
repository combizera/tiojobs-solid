<?php

namespace Combizera\Solid;

class ControladorDeEmail
{
    public function validarEmail(string $email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function enviarEmail(string $email, string $message): void
    {
        $mail = new Mail();
        $mail->send($email, $message);
    }
}