<?php
/*
    $a = 10;
    $b = 9;
    echo $a+$b;
    $a++;
    echo " ",$a;
*/
?>


<?php
/*
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
    echo "After incrementing a: ",$a,"\n";
    $a--;
    echo "After decremnting a: ",$a,"\n";

    #4
    $x = $y = $z = 9;
    echo $x," ",$y," ",$z;
*/
?>





<?php 
/*
#5
    $username = readline("Enter username: ");

    $greeting = !empty($username) ? "Welcome, $username" : "Welcome, Guest";

    echo $greeting;
*/
?>

<?php
#6

    $nationality = readline("Enter your nationality: ");
    $age = readline("Enter your age: ");
    echo $nationality == "Indian" ? ($age >= 18 ? "Eligibe" : "Not eligible") : "Not eligible";
?>

<?php
#7
    $marks = readline("Enter your marks: ");
    if($marks>=90){
        echo "A";
    }
    else if($marks>=80 && $marks<90){
        echo "B";
    }
    else if($marks>=70 && $marks < 80){
        echo "C";
    }
    else if($marks>=60 && $marks < 70){
        echo "D";
    }
    else{
        echo "F";
    }
?>

