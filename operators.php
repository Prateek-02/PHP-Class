<?php
    $a = 10;
    $b = 9;
    echo $a+$b;
    $a++;
    echo " ",$a;
?>


<?php

    #1
    $a = readline("Enter a: ");
    $b = readline("Enter b: ");
    $c = readline("Enter c: ");
    $d = readline("Enter d: ");
    $e = readline("Enter e: ");

    echo "The value is: ",($a+$b)*$c/$d-$e,"\n";

    #2
    $num = readline("Enter the number: ");
    $a += $num;
    $b -= $num;
    $c *= $num;
    $d /= $num;
    $e %= $num;

    echo $a," ",$b," ",$c," ",$d," ",$e,"\n";

    #3
    $a++;
    echo $a,"\n";
    $a--;
    echo $a,"\n";

    #4
    $x = $y = $z = 9;
    echo $x," ",$y," ",$z;
?>



