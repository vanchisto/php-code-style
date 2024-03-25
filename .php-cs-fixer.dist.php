<?php

use PhpCsFixer\Finder;

/** @var PhpCsFixer\Config $config */
$config = require __DIR__ . '/php-cs-fixer-config.php';

$finder = (new Finder())->in(__DIR__);

return $config->setFinder($finder);
