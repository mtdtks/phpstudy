<?php

interface Human
{
    public function getName(): string;
    public function setName(string $name);
    public function getWeight(): int;
    public function setWeight(int $weight);
    public function getHeight(): int;
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
    public function getName(): string
    { return $this->name; }
    public function setName(string $name): void
    { $this->name = $name; }
    public function getHeight(): int
    { return $this->height; }
    public function setHeight(int $height): void
    { $this->height = $height; }
    public function getWeight(): int
    { return $this->weight; }
    public function setWeight(int $weight): void
    { $this->weight = $weight; }
}

interface Comparator
{
}
interface HumanComparator
{
    public function compare (Human $fst, Human $sec): int;
}

class WeightComparator implements HumanComparator, Comparator
{
    public function compare (Human $fst, Human $sec): int
    {
        $a = $fst->getWeight();
        $b = $sec->getWeight();

        $res = null;
        if ($a < $b) { $res = -1; }
        elseif ($a > $b) { $res = 1; }
        else { $res = 0; }
        return $res;
    }
}
class NameComparator implements HumanComparator, Comparator
{
    public function compare(Human $fst, Human $sec): int
    {
        $a = $fst->getName();
        $b = $sec->getName();

        return strcmp($a, $b);
    }
}

interface Algorithm
{
    public function sort(array $array, Comparator $comparator): array;
}

// $arrayのふたつのPersonをくらべて$target順に並べ替える
class SelectionSort implements Algorithm
{
    public function sort($array, $comparator): array
    {
        for($i = 0; $i < count($array); $i++)
        {
            for($n = 1; $n < count($array); $n++)
            {
                // 隣接要素を比較し大小が逆なら入替える
                if ($comparator->compare($array[$n-1], $array[$n]) === 1) {
                    $temp = $array[$n];
                    $array[$n] = $array[$n - 1];
                    $array[$n - 1] = $temp;
                }
            }
        }
        return $array;
    }
}

$input = array( new Person('たろう', 60, 165),
                new Person('次郎', 81, 170),
                new Person('三郎', 55, 155),
                new Person('あつろう', 80, 180),
);
$comparator = new WeightComparator();
//$comparator = new NameComparator();
$algorithm = new SelectionSort();

$myArraySort = function (Array $input, Algorithm $algorithm, Comparator $comparator): array {
    $res = $algorithm->sort($input, $comparator);
    return $res;
};
$cons = $myArraySort($input, $algorithm, $comparator);
var_dump($cons);
