<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/11
 * Time: 9:10
 *
 *  課題：
 * $myArraySort = function (Array $input, Algorithm $algorithm, Compalator $compalator): Array
 * 入力の配列は↓みたいな連想配列とか

[
['name' => 'たろう', 'weght'=> 60, 'height'=> 166],
['name' => '次郎', 'weght'=> 62, 'height'=> 170],
....
]

↓みたいな感じのとか取れるようにして。

[
new Human ('たろう', 60, 166),
new Human ('次郎', 62, 170),
]
 *
 */

$array = array(
    0 => array(
        'name' => 'たろう',
        'weight' => 60,
        'height' => 166,
    ),
    1 => array(
        'name' => '次郎',
        'weight' => 62,
        'height' => 170,
    ),
    2 => array(
        'name' => '三郎',
        'weight' => 75,
        'height' => 180,
    ),
);

var_dump($array);

interface Creature
{

}
class Human implements Creature
{

    public function __construct()
    {
    }

}


interface Sorter
{
    /**
     * @param array $array
     * @return array
     */
     public function my_array_sort (array $array): array;
}


class Algorithm
{
    function my_array_sort (array $array): array
    {
        //sort

    }
}


class QuickSort
{
    function sort (Sorter $sorter)
    {
       // sort
    }
}

class BubbleSort
{
    function sort (Sorter $sorter)
    {
       // sort
    }
}