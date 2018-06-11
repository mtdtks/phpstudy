<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/11
 * Time: 8:27
 */

$arr = array(3,2,1,4,15,18,13,99,77,66,1,100,0);

var_dump(bubble_sort($arr));

function bubble_sort($array)
{
    // 要素数回繰り返し
    for($i = 0; $i < count($array); $i++)
    {
        // 要素数-1回繰り返し
        for($n = 1; $n < count($array); $n++)
        {
            // 隣接要素を比較し大小が逆なら入替える
            if($array[$n-1] > $array[$n])
            {
                $temp = $array[$n];
                $array[$n] = $array[$n-1];
                $array[$n-1] = $temp;
            }
        }
    }
    return $array;
}
