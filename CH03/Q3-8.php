<?php
    echo "--------------------<br>";
    echo "달러 원화 유로<br>";
    echo "--------------------<br>";
    
    for ($dollar = 10; $dollar <= 20; $dollar += 2) {
        $won = $dollar * 1180.60;
        $euro = $dollar * 1350.30;
        echo $dollar."&nbsp; ".$won."&nbsp; ".$euro."<br>";
    }
    echo "--------------------<br>";
?>