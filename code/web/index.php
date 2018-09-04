<?php
require '../vendor/autoload.php';

$data = unserialize($_GET['data']);

if (isset($data['name'])) {
    echo 'Hello ' . $data['name'];
}
