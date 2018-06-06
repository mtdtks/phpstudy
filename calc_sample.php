<?php


interface Calculators {
    public function Plus($a, $b);
    public function Minus($a, $b);
}

//計算プログラムをつくってみる。
class Piyo implements Calculators {
    public  function Plus($a, $b) {
        return $a + $b;
    }

    public  function  Minus($a, $b)
    {
        return $a - $b;
    }
}

//いちど引数出してみる
var_export($argv);
echo PHP_EOL;

//
$instance = new Piyo();
$func = $argv[1];

echo $instance -> $argv[2]($argv[1], $argv[3]);






?>