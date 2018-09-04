<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 26.08.18
 * Time: 7:42 PM
 */

namespace Examples\Example3;

class Example3
{
    private $callable;

    public function __destruct()
    {
        if (isset($this->callable)) {
            call_user_func($this->callable);
        }
    }
}
