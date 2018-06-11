<?php

//$argv = array(
//    0 => 'test.php',
//    1 => '1',
//    2 => 'Plus',
//    3 => '3',
//);

/**
 * Interface Calculator
 *
 */
interface Calculator {
    /**
     * 足し算と引き算
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b);

}


//計算プログラムをつくってみる。

/**
 * Class Plus
 */
class Plus implements Calculator
{
    private $a;
    private $b;

    function __construct()
    {
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    function calc($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $a + $b;
    }
}

class Minus implements Calculator
{
    private $a;
    private $b;

    function __construct()
    {
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    function calc($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        return $a - $b;
    }
}

var_export($argv);

$operator = $argv[2];

$instance = new $operator();

function f (Calculator $instance) {
    return $instance->calc(argv[1], argv[3]);
}

echo f($instance);

