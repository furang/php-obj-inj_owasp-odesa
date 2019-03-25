<?php
require '../vendor/autoload.php';

switch ($_GET['file']) {
    case 'check':
        $fileName = 'check.me';
        break;
    case 'phar':
        $fileName = '../phar/payload.phar';
        break;
    case 'phar://phar':
        $fileName = 'phar://../phar/payload.phar';
        break;
    default:
        $fileName = '';
}


if (file_exists($fileName)) {
    echo '<h1>File exists!</h1>';
} else {
    echo '<h1>File doesn\'t exist!</h1>';
}

print <<<HTML
<h1>
<a href="exists.php?file=check">CHECK ME</a>
<br/>
<a href="exists.php?file=phar">CHECK PHAR</a>
<br/>
<a href="exists.php?file=phar://phar">CHECK PHAR WRAPPER</a>
</h1>
HTML;
