<?php

interface Calculator {
    public function calc();
}

//計算プログラムをつくってみる。
class Plus implements Calculator
{
    private $a;
    private $b;

    function __construct($arg1, $arg2)
    {
        $this->a = $arg1;
        $this->b = $arg2;
    }

    function calc()
    {
        return $this->a + $this->b;
    }
}

class Minus implements Calculator
{
    private $a;
    private $b;

    function __construct($arg1, $arg2)
    {
        $this->a = $arg1;
        $this->b = $arg2;
    }

    function calc()
    {
        return $this->a + $this->b;
    }
}

var_export($argv);

$operator = $argv[2];

$instance = new $operator($argv[1], $argv[3]); //渡さなくともよいのかも

function f (Calculator $instance) {
    return $instance->calc();
}

echo f($instance);
