<?php
    $a = 10;
    $b = 9;
    echo $a+$b;
    $a++;
    echo " ",$a;
?>


<?php
    $a = readline("Enter a: ");
    $b = readline("Enter b: ");
    $c = readline("Enter c: ");
    $d = readline("Enter d: ");
    $e = readline("Enter e: ");

    echo "The value is: ",($a+$b)*$c/$d-$e,"\n";
    $a += 6;
    $b -= 3;
    $c *= 2;
    $d /= 2;
    $e %= 2;

    echo $a," ",$b," ",$c," ",$d," ",$e,"\n";

    $a++;
    echo $a,"\n";
    $a--;
    echo $a,"\n";

    $x = $y = $z = 9;
    echo $x," ",$y," ",$z;
?>



