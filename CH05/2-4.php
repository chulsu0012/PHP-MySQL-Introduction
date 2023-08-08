<?php
    echo "<h3>특정 문자열로 변환</h3>";
    $tel = "2022-10-30";
    $tel2 = str_replace("-", "/", $tel);
    echo $tel2."<br>";

    $str = "안녕하세요.\n반갑습니다.";
    $str2 = str_replace("\n", "<br>", $str);
    echo $str2."<br>";

    echo "<br><h3>알파벳 대소문자 변경</h3>";
    $str3 = "PHP is fun!";
    echo strtoupper($str3)."<br>";
    echo strtolower($str3)."<br>";

    echo "<br><h3>특정 문자열 분리</h3>";
    $str4 = "2022-03-25 21:30:50";
    
    $year = substr($str4, 0, 4);
    $month = substr($str4, 5, 2);
    $day = substr($str4, 8, 2);
    $time = substr($str4, 11);

    echo $year."년<br>";
    echo $month."월<br>";
    echo $day."일<br>";
    echo $time."<br>";
    
    echo "<br><h3>문자열 길이 구하기</h3>";
    echo strlen($str3)."<br>";
    echo strlen("거북이");
?>