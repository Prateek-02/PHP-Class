<?php
    // $name = array("Manoj","Rahul","Aneesh");
    // $marks = array("75","89","44");
    // $c = array_combine($name,$marks);
    // print_r($c);

?>

<?php
    // $courses = array("PHP","Laravel","Node.js","HTML","CSS","ASP.NET");
    // print_r(array_chunk($courses,2));
?>

<?php
    // $a = array("block 33","block 34","block 34","block 35","block 36");
    // print_r(array_count_values($a));
?>

<?php
    // $food = array(
    //     $fruits = array("Orange","Apple","Mango"),
    //     $veg = array("Potato","Tomato","Chilli")
    // );

    // $merged = array_merge($fruits, $veg);
    // print_r(array_count_values($merged));
    
?>


<?php
    // $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2 = array("e"=>"red","f"=>"green","g"=>"blue");
    // $a3 = array("h"=>"magenta","i"=>"seagreen");

    // $result = array_diff($a1,$a2,$a3);
    // print_r($result);
?> 

<?php
    // $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $result = array_flip($a1);
    // print_r($result);
?>

<?php
    // $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2 = array("e"=>"red","f"=>"green","g"=>"blue");
    // $a3 = array("red","blue");

    // $res = array_intersect($a1,$a2,$a3);

    // print_r($res);
?>

<?php
    // $arr = array("Ind","Aus","Sa","Nz","Eng","Sl","Pak");

    // array_pop($arr);
    // print_r($arr);

    // echo"<br>";

    // array_push($arr,"Agf");
    // print_r($arr);
    
    // echo "<br>";

    // array_shift($arr);
    // print_r($arr);

    // echo "<br>";

    // array_unshift($arr,"Ind");
    // print_r($arr);


?>

<?php
//    $a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
//    echo array_search("red",$a);
   
?>

<?php
    $a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    print_r(array_splice($a,1,2));
?>