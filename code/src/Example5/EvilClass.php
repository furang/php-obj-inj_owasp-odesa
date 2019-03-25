<?php

namespace Examples\Example5;

class EvilClass
{
    function __destruct()
    {
        echo '<h1>HACKED!</h1>';
    }
}
