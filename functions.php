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

function rectangle($l,$b){
    return $l*$b;
}
function triangle($b,$h){
    return (0.5)*$b*$h;
}
function circle($r){
    return 3.14*$r*$r;
}

$shape = readline("Enter your shape name: ");
$l = 5;
$b = 6;
$r = 9;
$h = 10;

if($shape == "rectangle"){
    echo rectangle($l,$b);
}
else if($shape == "triangle"){
    echo triangle($b,$h);
}
else{
    echo circle($r);
}

?>