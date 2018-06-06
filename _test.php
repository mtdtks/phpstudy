<?php

// コマンドライン引数の出力
//var_export($argv);

// Hogeクラスを宣言。
class Hoge {
    function __construct () {
        var_export('Hoge created...');
    }
}

// Fugaクラスを宣言。
class Fuga {
    function __construct () {
        var_export('Fuga created...');
    }
}

// 文字列からclassをnewする。
//$clazz = $argv[1];
//$instance = new $clazz();
//
//$instance -> plus(1, 2);

// タイプヒンティング付きの関数。
function f (Fuga $hoge) {
    var_export('f is called...');
}

// 関数を呼んでみる
//f($instance);

interface calculators {
    public function ($a, $b);
}

//計算プログラムをつくってみる。
class Piyo implements calculators {
    public  function plus($a, $b) {
        return $a + $b;
    }

    public  function  minus($a, $b)
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