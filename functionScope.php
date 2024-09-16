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
    function sum(){
        static $a = 10;
        $b = 20;

        $a++;
        $b++;

        return $a." ".$b;

    }

    echo sum();

?>