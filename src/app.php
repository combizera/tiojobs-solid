<?php

use Combizera\Solid\FileGenerator;
use Combizera\Solid\Files\Pdf;
    use Combizera\Solid\Files\Txt;
    use Combizera\Solid\Files\Word;

require_once __DIR__ . '/../vendor/autoload.php';

$files = [
    new Word(),
    new Pdf(),
    new Txt(),
];

$filesGenerator = new FileGenerator();
$filesGenerator->generatorFiles($files);