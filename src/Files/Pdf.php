<?php

namespace Combizera\Solid\Files;

use Combizera\Solid\File;

class Pdf extends File
{
    public function generate(): void
    {
        echo "Gerei o PDF" . PHP_EOL;
    }
}