<?php
class  bca
{
    public $a, $b, $c;
    function mul()
    {
        $this->c = $this->a * $this->b;
        return $this->c;
    }
    function add()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$obj1 = new bca();
$obj1->a = 10;
$obj1->b = 20;
echo "value of a " . $obj1->a  . "value of b  " . $obj1->b . "<br>";
echo "multiplication is " . $obj1->mul() . "<br>";
echo "addition  is " . $obj1->add() . "<br>";
echo "sub is " . $obj1->sub() . "<br>";
// echo "<pre>";
// echo var_dump($obj1);
// echo "</pre>";

$obj2 = new bca();
$obj2->a = 8;
$obj2->b = 800;
echo "value of a " . $obj2->a  . "value of b  " . $obj2->b . "<br>";
echo "multiplication is " . $obj2->mul() . "<br>";
echo "addition  is " . $obj2->add() . "<br>";
echo "sub is " . $obj2->sub() . "<br>";
