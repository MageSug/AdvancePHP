<?php
namespace In;

class TestClassParent
{
    public $var1;

    public function __construct($var1)
    {
        $this->var1 = $var1;
    }

    public function printVariable1()
    {
        echo $this->var1;
    }
}