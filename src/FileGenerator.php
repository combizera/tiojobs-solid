<?php

namespace Combizera\Solid;

class FileGenerator
{
    public function generatorFiles(array $files): void
    {
        foreach ($files as $file) {
            $file->generate();
        }
    }
}