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