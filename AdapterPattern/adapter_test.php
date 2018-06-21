<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/06/21
 * Time: 8:41
 */

interface Printer
{
    public function printWeak();
    public function printStrong();
}

class Banner
{
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }
    public function showWithParen()
    {
        return '(' . $this->string . ')';
    }
    public function showWithAster()
    {
        return '*' . $this->string . '*';
    }

    public function setString(string $string){ $this->string = $string; }
    public function getString(): string{ return $this->string; }
}

//class PrintBanner extends Banner implements Printer
//{
//    public function __construct(string $string)
//    {
//        $this->setString($string);
//    }
//    public function printWeak()
//    {
//        $this->showWithParen();
//    }
//    public function printStrong()
//    {
//        $this->showWithAster();
//    }
//}
class PrintBanner extends Banner implements Printer
{
    public function __construct(string $string)
    {
        $this->setString($string);
    }
    public function printWeak()
    {
        $this->showWithParen();
    }
    public function printStrong()
    {
        $this->showWithAster();
    }
}

$p = new PrintBanner('Hello');
var_dump($p->showWithAster());
var_dump($p->showWithParen());
