<?php
    $string = "PHP is the web scripting language of 522 choice";
    $exp = preg_match_all("/[Wo]/i",$string,$array);
    if($exp){
        echo "A match is found";
    }
    else{
        echo "No match is found";
    }

    echo "<prev>";
    print_r($array);
    echo"</prev>";
?>