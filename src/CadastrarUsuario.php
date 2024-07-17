<?php

namespace Combizera\Solid;

class CadastrarUsuario
{
    public function __construct(
        public int $id,
        public string $nome,
        public string $email,
    ) { }
}