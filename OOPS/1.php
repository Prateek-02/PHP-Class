<?php
class Calculation{
    public $a,$b,$c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}

$c1 = new Calculation();
$c1->$a = 5;
$c1->$b = 15;

echo $c1->sum();
echo $c1->sub();
?>