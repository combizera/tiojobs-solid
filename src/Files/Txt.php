<?php

namespace Combizera\Solid\Files;

use Combizera\Solid\File;

class Txt extends File
{
    public function generate(): void
    {
        echo "Gerei o TXT" . PHP_EOL;
    }
}