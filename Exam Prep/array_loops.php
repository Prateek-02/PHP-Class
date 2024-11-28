<?php
    $lang = array("python","c++","java","php");
    echo count($lang);
    echo "<br>";
    echo $lang[0];
    echo "<br>";

    $a = 0;
    while($a <= 10){
        echo $a," ";
        $a++;
    }
    echo"<br>";

    // iterating arrays in php using while loop
    echo "While loop: ";
    $a = 0;
    while ($a < count($lang)){
        echo $lang[$a]," ";
        $a++;

    }
    echo "<br>";
    // iterating arrays in php using do while loop
    echo "Do while loop: ";
    $a = 100;
    do
    {
        echo $a," ";
        $a++;
    }
    while ($a < 10);

    echo "<br>";
    // for loop
    echo "For loop: ";
    $a = 0;
    for ($a=0; $a < 10; $a++) { 
        echo $a," ";
    }



?>