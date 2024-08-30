<?php

    // $sum = 0;
    // $n = readline("Enter number: ");
    // $i=1;
    // do{
    //     $sum+= $i;
    //     $i++;
    // }
    // while($i<=$n);

    // echo "The sum is: ",$sum;

?>

<?php
    // $n = 5;
    // for($i=1; $i <= $n;$i++){
    //     for($j = 1;$j <= $i; $j++){
    //         echo $i;
    //     }
    //     echo "\n";
    // }
?>

<?php
    // $n = readline("Enter the number: ");
    // $fact = 1;

    // while($n!=0){
    //     $fact*=$n;
    //     $n--;
    // }

    // echo $fact;
?>

<?php
    $n = readline("Enetr the number: ");
    $sum = 0;

    while($n!=0){
        $d = $n%10;
        $sum += $d;
        $n = $n/10;
    }

    echo $sum;
?>
