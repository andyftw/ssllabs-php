<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in($dir = __DIR__ . '/src');

return new Sami($iterator, array(
    'title'         => 'Documentation',
    'build_dir'     => __DIR__ . '/docs',
    'cache_dir'     => __DIR__ . '/cache',
));
