<?php
    echo "--------------------<br>";
    echo "인치 센티미터<br>";
    echo "--------------------<br>";
    
    for ($inch = 10; $inch <= 20; $inch += 2) {
        $cm = $inch * 2.54;
        echo $inch."&nbsp; ".$cm."<br>";
    }
    echo "--------------------<br>";
?>