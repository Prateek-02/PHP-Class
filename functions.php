<?php
    function fullname($first, $last){
        echo "Full name is ", $first , " ", $last;
    }

    fullname("Prateek","Raj");
?>


<?php
    function add(float $a,float $b){
        return intval($a+$b);
    }

    echo add(1.2,5.5);
?>


<?php

function area($shape,$l,$b,$r,$h){
    if($shape == "rectangle"){
        return $l*$b;
    }
    else if($shape == "triangle"){
        return (float)((1/2)*$b*$h);
    }
    else{
        return 3.14*$r*$r;
    }
}

$shape = readline("Enter your shape name: ");
$l = 5;
$b = 6;
$r = 9;
$h = 10;

echo area($shape,$l,$b,$r,$h);

?>