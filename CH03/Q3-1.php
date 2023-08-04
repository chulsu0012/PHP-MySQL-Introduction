<?php
    $score = 95;

    if ($score>=90 and $score<=100)
        $grade = "수";
    elseif ($score >= 80)
        $grade = "우";
    elseif ($score >= 70)
        $grade = "미";
    elseif ($score >= 60)
        $grade = "양";
    else
        $grade = "가";

    echo "시험 점수 : ".$score."<br>";
    echo "등급 : ".$grade;
?>