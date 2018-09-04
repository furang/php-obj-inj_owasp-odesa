<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 26.08.18
 * Time: 6:54 PM
 */

namespace Examples\Example2;

class Example2
{
    protected $caller;

    public function __destruct()
    {
        $this->caller->login();
    }
}
