<?php
    // function fullname($first, $last){
    //     echo "Full name is ", $first , " ", $last;
    // }

    // fullname("Prateek","Raj");
?>


<?php
    // function add(float $a,float $b){
    //     return intval($a+$b);
    // }

    // echo add(1.2,5.5);
?>


<?php

    // function rectangle($l,$b){
    //     return $l*$b;
    // }
    // function triangle($b,$h){
    //     return (0.5)*$b*$h;
    // }
    // function circle($r){
    //     return 3.14*$r*$r;
    // }

    // $shape = readline("Enter your shape name: ");
    // $l = 5;
    // $b = 6;
    // $r = 9;
    // $h = 10;

    // if($shape == "rectangle"){
    //     echo rectangle($l,$b);
    // }
    // else if($shape == "triangle"){
    //     echo triangle($b,$h);
    // }
    // else{
    //     echo circle($r);
    // }

?>


<?php
    // function calculateFine($daysLate){
    //     $fine = 0;
    //     if($daysLate >= 1 && $daysLate <= 5){
    //         $fine = 1*$daysLate;
    //     }
    //     else if($daysLate >= 6 && $daysLate <=10){
    //         $fine = 2*$daysLate;
    //     }
    //     else{
    //         $fine = 5*$daysLate;
    //     }

    //     return $fine;

    // }
    // $daysLate = readline("Enter late day: ");

    // echo calculateFine($daysLate);
?>

<?php
    // function calcBmi($weight,$height){
    //     return floatval(($weight)/($height*$height));
    // }

    // $weight = readline("Enter your weight: ");
    // $height = readline("Enter your height: ");

    // echo calcBmi($weight,$height);
?>

<?php
    // function splitBill($totalBill,$TotalPeople){
    //     $total = floatval($totalBill/$TotalPeople);

    //     return $total;

    // }

    // $totalBill = readline("Enter bill amount: ");
    // $TotalPeople = readline("Enter no. of people: ");

    // echo splitBill($totalBill,$TotalPeople);
    
?>


<?php
    // function addSuffix($string){
    //     $fixed = "done";
    //     return $string." ".$fixed;
    // }

    // $string = readline("Enter the string: ");
    // echo addSuffix($string);
    // echo "\n";
    // echo $string;

?>

<?php
    function convertToFahrenheit(&$celcius){
        $fahrenheit = floatval($celcius*9/5) + 32;
    }

    $celcius = readline("Enter temperature in celcius: ");
    $fahrenheit = floatval($celcius*9/5) + 32;
    echo $fahrenheit;
    echo "\n";

    convertToFahrenheit($celcius);

    echo $fahrenheit;
?>