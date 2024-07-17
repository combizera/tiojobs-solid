<?php

namespace Combizera\Solid\Controller;

use Combizera\Solid\Mail;

class Email
{
    public function validateEmail(string $email): bool
    {
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function sendEmail(string $email, string $message): void
    {
        $mail = new Mail();
        $mail->send($email, $message);
    }
}