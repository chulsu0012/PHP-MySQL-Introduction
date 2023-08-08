<?php
    echo "절댓값<br>";
    echo abs(5.3)."<br>";
    echo abs(-5.3)."<br>";

    echo "<br>올림, 내림, 반올림<br>";
    echo ceil(3.2)."<br>";
    echo ceil(3.7)."<br>";

    echo floor(3.2)."<br>";
    echo floor(3.7)."<br>";

    echo round(3.2)."<br>";
    echo round(3.7)."<br>";

    echo "<br>제곱근, 거듭제곱<br>";
    echo sqrt(25)."<br>";
    echo sqrt(2)."<br>";

    echo pow(2, 3)."<br>";
    echo pow(3, 4)."<br>";

    echo "<br>랜덤 수<br>";
    echo rand(1, 6)."<br>";
    echo rand(1, 6)."<br>";
    echo rand(1, 6)."<br>";

    echo "<br>16진수 변환<br>";
    echo dechex(255)."<br>";
    echo dechex(128)."<br>";
    
    echo hexdec("ff")."<br>";
    echo hexdec("80")."<br>";
?>