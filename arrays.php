<?php
    $courses = array("PHP","C++","JAVA","Node.Js");
    $count = count($courses);

    for($i=0;$i<$count;$i++){
        echo $courses[$i]," ";
    }
    echo "\n";

    foreach ($courses as $c ) {
        echo $c," ";
    }

?>

<?php
    $color = array("c1" => "red", "c2" => "green", "c3" => "blue");
    foreach ($color as $key => $value) {
        echo $key, " => ", $value,", ";
    }
?>


<?php
    $color = array('white','green','red','blue','black');

    $cnt = count($color);

    echo "<ul>";

    for($i=0;$i<$cnt;$i++){
        echo "<li>", $color[$i];
    }

    echo"<br>","<br>";

?>

<?php
    $marks = array("Rahul" => "80" , "Rohit" => "90" , "Aman" => "75" , "Tony" => "96");
    $cnt = count($marks);

    $sum = 0;

    foreach ($marks as $key => $value) {
        $sum += $value;
    }

    $avg = $sum/$cnt;
    echo "Average score: ", $avg,'<br>';

    foreach ($marks as $key => $value) {
        # code...
        if($value > $avg){
            echo $key, " scored " , $value,'<br>';
        }
    }
?>