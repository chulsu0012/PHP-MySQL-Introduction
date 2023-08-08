<?php
    $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    echo $str;

    $str2 = htmlspecialchars($str);
    echo $str2."<br>";

    echo "<br><br>";
    $str3 = "&lt;h3&gt;MySQL은 PHP와 같이 많이 사용된다.&lt;/h3&gt;";
    echo $str3;

    $str4 = htmlspecialchars_decode($str3);
    echo $str4;
?>