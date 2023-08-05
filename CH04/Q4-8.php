<?php
    $score = array(93, 94, 78, 47, 89, 78, 42, 97, 88, 74,
                    92, 93, 84, 72, 69, 71, 82, 77, 58, 32,
                    92, 100, 39, 68, 89, 70, 65, 97, 68, 83);
    
    $grade = array(0, 0, 0, 0, 0);

    for ($i = 0; $i < 30; $i++) {
        if ($score[$i] >= 90)
            $grade[0]++;
        elseif ($score[$i] >= 80)
            $grade[1]++;
        elseif ($score[$i] >= 70)
            $grade[2]++;
        elseif ($score[$i] >= 60)
            $grade[3]++;
        else
            $grade[4]++;
    }

    echo "수 : ".$grade[0]."명<br>";
    echo "우 : ".$grade[1]."명<br>";
    echo "미 : ".$grade[2]."명<br>";
    echo "양 : ".$grade[3]."명<br>";
    echo "가 : ".$grade[4]."명";
?>