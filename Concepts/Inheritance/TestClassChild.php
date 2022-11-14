<?php
namespace In;

use In\TestClassParent;

class TestClassChild extends TestClassParent
{
    public $var2;

    public function __construct($var1, $var2)
    {
        parent::__construct($var1);
        $this->var2 = $var2;
    }

    public function printVariable()
    {
        echo $this->var2;
    }
}