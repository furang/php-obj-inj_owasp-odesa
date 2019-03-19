<?php

include '../phar/EvilClass.php';

$fileName = $_GET['file'];

if (file_exists($fileName)) {
    echo '<h1>File exists!</h1>';
} else {
    echo '<h1>File doesn\'t exist!</h1>';
}