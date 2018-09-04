<?php
/**
 * Created by PhpStorm.
 * User: Taras
 * Date: 26.08.18
 * Time: 7:37 PM
 */

namespace Examples\Example2;

class Example2User implements Example2Interface
{
    public function login()
    {
        echo 'Logged in as user';
    }
}
