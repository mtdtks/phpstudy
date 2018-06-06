<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/06
 * Time: 9:04
 */

$my_pow = function ($times = 2)
{
    return function ($v) use (&$times)
    {
        return pow($v, $times);
    };
};

$cube = $my_pow(3);

echo $cube(1), PHP_EOL;
echo $cube(2), PHP_EOL;
echo $cube(3), PHP_EOL;
echo $cube(4), PHP_EOL;

