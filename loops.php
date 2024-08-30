<?php
    $sum = 0;
    $n = readline("Enter number: ");
    $i=1;
    do{
        $sum+= $i;
        $i++;
    }
    while($i<=$n);

    echo "The sum is: ",$sum;

?>

<?php
    $n = 5;
    for($i=1; $i <= $n;$i++){
        for($j = 1;$j <= $i; $j++){
            echo $i;
        }
        echo "\n";
    }
?>
