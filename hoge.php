<?php

// コマンドライン引数の出力
var_dump($argv);

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
$clazz = $argv[1];
$instance = new $clazz();

// タイプヒンティング付きの関数。
function f (Hoge $hoge) {
    var_export('f is called...');
}

// 関数を呼んでみる
f($instance);