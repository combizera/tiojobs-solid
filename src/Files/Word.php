<?php

namespace Combizera\Solid\Files;

use Combizera\Solid\File;

class Word extends File
{
    public function generateDocX(): void
    {
        echo "Gerei o DocX" . PHP_EOL;
    }
}