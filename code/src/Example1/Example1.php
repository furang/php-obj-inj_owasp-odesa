<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 26.08.18
 * Time: 6:52 PM
 */

namespace Examples\Example1;

class Example1
{
    private $fileName;

    public function __destruct()
    {
        if (file_exists($this->fileName)) {
            unlink($this->fileName);
        }
    }
}
