<?php
    $arr = ["Green","Yellow","Red"];
    echo implode(" ",$arr);
?>

<?php
    $str = "Hello have a nice day";
    print_r(explode(" ",$str));
    print_r(explode(" ",$str,2));
?>

<?php
    $str1 = "secure";
    $str2 = "password";
    $str3 = "generator";

    $str1 = strtoupper($str1);
    $str2 = strtoupper($str2);
    $str3 = strtoupper($str3);

    $x = substr($str1,0,3);
    $y = substr($str2,0,3);
    $z = substr($str3,0,3);

    $ans = $x.$y.$z;

    $len = strlen($ans);

    $ans = str_replace('S','$',$ans);

    echo "Password is: ".$ans;
    echo " Length of the password is: ".$len;




?>