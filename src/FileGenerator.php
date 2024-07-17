<?php

namespace Combizera\Solid;

use Combizera\Solid\Files\Pdf;
use Combizera\Solid\Files\Word;

class FileGenerator
{
    public function generatorFiles(array $files): void
    {
        foreach ($files as $file) {
            if($file instanceof Word){
                $file->generateDocX();
            } else if($file instanceof Pdf){
                $file->generatePdf();
            }
        }
    }
}