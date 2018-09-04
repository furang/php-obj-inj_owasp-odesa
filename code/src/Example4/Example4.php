<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 26.08.18
 * Time: 7:40 PM
 */

namespace Examples\Example4;

class Example4
{
    protected $code;

    public function __destruct()
    {
        if (isset($this->code)) {
            eval($this->code);
        }
    }
}
