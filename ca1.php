<?php
    $arr = array(72,75,79,85,88);
    array_push($arr,90);
    array_push($arr,74);
    array_push($arr,76);

    unset($arr[7]);

    $count = count($arr);

    print_r($arr);
    echo"<br>";

    $sum = 0;

    for($i = 0;$i<$count;$i++){
        $sum += $arr[$i];
    }

    $avg = $sum/$count;

    echo "Average Temperature: ",$avg;
    echo "<br>";

    $max = $arr[0];

    for($i=0;$i<$count;$i++){
        if($arr[$i] > $max){
            $max = $arr[$i];
        }
    }

    echo "Highest Temperature: ",$max;
    echo "<br>";

    $min = $arr[0];

    for($i=0;$i<$count;$i++){
        if($arr[$i]< $min){
            $min = $arr[$i];
        }
    }

    echo "Lowest Temperature: ",$min;

?>