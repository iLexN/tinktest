<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$srcDir = __DIR__.'/../src';

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    //->exclude('Tests')
    ->in($srcDir);
    
$options = [
   //'theme'                => 'default',
   //'title'                => 'MYsql with Elasticsearch API Documentation',
   'build_dir'            => __DIR__ . '/../docs',
   'cache_dir'            => __DIR__ . '/../cache/sami_doc',
];

return new Sami($iterator, $options);
