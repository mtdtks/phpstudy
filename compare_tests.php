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
 * compare は1,-1,0を返すj
 */






interface Human
{
    public function getName();
    public function setName(string $name);
    public function getWeight();
    public function setWeight(int $weight);
    public function getHeight();
    public function setHeight(int $height);
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
    public function getName(): string
    { return $this->name; }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    { $this->name = $name; }

    /**
     * @return int
     */
    public function getHeight(): int
    { return $this->height; }
    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    { $this->height = $height; }
    /**
     * @return int
     */
    public function getWeight(): int
    { return $this->weight; }
    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    { $this->weight = $weight; }
}

/**
 * Interface Compalator
 */
interface Comparator
{
    public function compare ($first, $second): int;
}

class WeightComparator implements Comparator
{
    public function compare ($a, $b): int
    {
        $res = null;
        if ($a < $b) { $res = -1; }
        elseif ($a > $b) { $res = 1; }
        else { $res = 0; }
        return $res;
    }
}

class NameComparator implements Comparator
{
    public function compare ($a, $b): int
    {
        return strcmp($a, $b);
    }
}


interface Algorithm
{
    public function sort(array $array, Comparator $comparator);
}

// $arrayのふたつのPersonをくらべて$target順に並べ替える
class SelectionSort implements Algorithm
{
    public function sort($array, $comparator)
    {
        for($i = 0; $i < count($array); $i++)
        {
            for($n = 1; $n < count($array); $n++)
            {
                //var_dump($array[$n-1]->weight);
                //var_dump($array->weight);

                $fst = $array[$n - 1]->getWeight();
                $sec = $array[$n]->getWeight();

                // 隣接要素を比較し大小が逆なら入替える
                //if($first > $second)
                if ($comparator->compare($fst, $sec) === 1) {
                    $temp = $array[$n];
                    $array[$n] = $array[$n - 1];
                    $array[$n - 1] = $temp;
                }
            }
        }
        return $array;
    }
}

$comparator = new WeightComparator();
$input = array( new Person('たろう', 60, 165), new Person('次郎', 62, 170), new Person('三郎', 55, 155));
$algorithm = new SelectionSort();

$myArraySort = function(Array $input, Algorithm $algorithm, Comparator $comparator): array {
    $res = $algorithm->sort($input, $comparator);
    return $res;
};
$cons = $myArraySort($input, $algorithm, $comparator);
echo var_dump($cons);

class NameSort
{
    private $comparator;
    private $algorithm;

    public function __construct()
    {
        $this->$comparator = new NameComparator();
        $this->algorithm = new SelectionSort();
    }
    public function sort(array $input): array
    {

    }
}

$so = new NameSort();



