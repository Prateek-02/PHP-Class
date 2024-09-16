<?php
    // function sum(){
    //     $s = $GLOBALS['a'] + $GLOBALS['b'];
    //     return $s;
    // }

    // $a = 10;
    // $b = 20;
    // echo sum();
?>

<?php
    // function sum(){
    //     static $a = 10;
    //     $b = 20;

    //     $a++;
    //     $b++;

    //     return $a." ".$b;

    // }

    // echo sum();
    // echo "\n";
    // echo sum();

?>

<?php
    function outer(){
        $a = "hello";
        function inner(&$a){
            echo $a;
            $a = "World";
            echo $a;
        }
        inner($a);
        echo $a;
    }
    outer();
    
?>