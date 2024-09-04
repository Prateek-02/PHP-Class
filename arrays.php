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
   


?>