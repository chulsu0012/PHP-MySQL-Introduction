<?php
    function area($width, $height) {
        $result = $width * $height / 2;
        return $result;
    }

    $width = 12;
    $height = 10;

    echo "삼각형의 너비 : ".$width."cm<br>";
    echo "삼각형의 높이 : ".$height."cm<br>";
    echo "삼각형의 넓이는 ".area($width, $height)."cm2입니다.<br>";
?>