<?php
    $result = array(
        array('Manoj',7.8,'pass'),
        array('Aditya',8.5,'pass'),
        array('Rahul',4.9,'fail')
    );
    echo "<table border = '2px'>";
    echo "<tr> 
                <th> Name </th>
                <th> CGPA </th>
                <th> Status </th>
        </tr>";
        foreach($result as $res){
            echo "<tr>";
            foreach($res as $r){
                echo "<td> $r </td>";
            }
            echo "</tr>";
        }
    echo "</table>";
    echo "<pre>";
    print_r($result);
   
?>