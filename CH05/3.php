<?php
    echo "<h3>배열 요소 개수</h3>";
    $animal = array("사자", "호랑이", "사슴", "여우");
    echo "요소의 개수 : ".count($animal)."<br>";

    echo "<br><h3>배열에 요소 추가</h3>";
    array_push($animal, "펭귄");
    array_push($animal, "코뿔소");
    print_r($animal);
    echo "<br>";

    echo "<br><h3>배열에 요소 삭제</h3>";
    array_pop($animal);
    print_r($animal);
    echo "<br>";

    echo "<br><h3>배열 요소 정렬</h3>";
    sort($animal);
    print_r($animal);
    echo "<br>";

    rsort($animal);
    print_r($animal);
    echo "<br>";

    echo "<br><h3>배열 합계</h3>";
    $score = array(93, 85, 93, 77, 100);
    $sum = array_sum($score);
    $avg = $sum / count($score);
    echo "합계 : ".$sum."<br>";
    echo "평균 : ".$avg."<br>";
?>