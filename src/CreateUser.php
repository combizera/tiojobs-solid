<?php

namespace Combizera\Solid;

class CreateUser
{
    public function __construct(
        public int $id,
        public string $name,
        public string $email,
    ) { }
}