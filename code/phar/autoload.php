<?php

function __autoload($name) {
    require_once str_replace('\\',DIRECTORY_SEPARATOR, $name) . '.php';
}
