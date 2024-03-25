<?php

use PhpCsFixer\Config;

$rules = require __DIR__ . '/php-cs-fixer-rules.php';

return (new Config())->setRules($rules);
