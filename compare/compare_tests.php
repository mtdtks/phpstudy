<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/13
 * Time: 8:30
 */

/*
 * [
 *     new Human ('たろう', 60, 166),
 *     new Human ('次郎', 62, 170),
 *  ]
 * のようなinputで
 * $myArraySort = function (Array $input, Algorithm $algorithm, Compalator $compalator): Array
 * のように実行する
 * comparatorは2つの値をくらべて「小さい」「同じ」「大きい」を返す？
 */






//public int Collator::compare ( string $str1 , string $str2 )
interface Human
{
    public function getName();
    public function getWeight();
    public function getHeight();
}

class Person implements Human
{
    private $name;
    private $weight;
    private $height;

    public function __construct(string $name,int $weight,int $height)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

//$input = array( new Person('たろう', 60, 165), new Person('次郎', 62, 170));

//var_dump($input);


interface AlgorithmImpl
{
    public function sort (array $input);

}

class Algorithm implements AlgorithmImpl
{

    private $array;

    public function __construct()
    {
    }

    public function setArray($array) {
        $this->array = $array;
    }

    public function sort($array)
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

}

interface ComparatorImpl
{
}

//class Comparator implements ComparatorImpl
//{
//    private $selecter;
//    // -1 0 1を返す？
//
//    public function __construct($selecter = 'bubble')
//    {
//        $this->selecter = $selecter;
//    }
//}

//$algorithm = new Algorithm();

//$simple_array = array(
//    'b' => 10,
//    't' => 50,
//    'i' => 90,
//    'a' => 100,
//);

//$simple_array = array(20, 10, 5, 80, 100);
//
//
//$result = $algorithm->sort($simple_array);
//var_dump($result);

//$myArraySort = function (Array $input, Algorithm $algorithm, Comparator $comparator): Array
//{
//
//};

/**
 * Interface CompalatorImpl
 *
 */
interface CompalatorImpl
{
    public function compare ($first, $second);
}

class Compalator implements ComparatorImpl
{
    public function compare ($a, $b)
    {
        $res = null;

        if ($a < $b) {
            $res = -1;
        } elseif ($a > $b) {
            $res = 1;
        } else {
            $res = 0;
        }

        return $res;
    }
}

// $arrayのふたつのPersonをくらべて$target順に並べ替える
class SimpleTest
{
    public function sort($array, $target)
    {
        for($i = 0; $i < count($array); $i++)
        {
            for($n = 1; $n < count($array); $n++)
                // 隣接要素を比較し大小が逆なら入替える
                if($array[$n-1]->$target() > $array[$n]->$target())
                {
                    $temp = $array[$n]->$target;
                    $array[$n] = $array[$n-1];
                    $array[$n-1] = $temp;
                }
        }
        return $array;
    }
}

$c = new Compalator();
$input = array( new Person('たろう', 60, 165), new Person('次郎', 62, 170), new Person('三郎', 55, 155));

$target = 'weight';



