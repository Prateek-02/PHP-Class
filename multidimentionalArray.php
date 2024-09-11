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


<?php
    $students = [
        "John" => [
            "Math" => 85,
            "Science" => 90,
            "History" => 78,
        ],
        "Jane" => [
            "Math" => 75,
            "Science" => 95,
            "History" => 82,
        ],
        "Alice" =>[
            "Math" => 88,
            "Science" => 80,
            "History" => 86,
        ]
    ];

    echo "<table border='2px'>";
    echo "<tr>
            <th>Student Name</th>
            <th>Subject</th>
            <th>Grade</th>
          </tr>";

    foreach ($students as $name => $subjects) {
        $total = 0;
        $subjectCount = count($subjects);

        foreach ($subjects as $subject => $grade) {
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$subject</td>";
            echo "<td>$grade</td>";
            echo "</tr>";
            $total += $grade;
        }

        $average = $total / $subjectCount;
        echo "<tr>";
        echo "<td colspan='2'><strong>Average Grade</strong></td>";
        echo "<td>" . number_format($average, 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
