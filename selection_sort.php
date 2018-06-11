<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/11
 * Time: 9:02
 */

$arr = array(7,1,5,2,6,3,4,8);
$cnt = count($arr);

var_dump($arr);

for($i=0; $i < $cnt; $i++){
    $k = $i;
    $min = $arr[$i];
    for($j = $i + 1; $j < $cnt; $j++){
        if($min > $arr[$j]){
            $k = $j;
            $min = $arr[$j];
        }
    }
    $arr[$k] = $arr[$i];
    $arr[$i] = $min;
}

var_dump($arr);
