<?php
    echo "--------------------<br>";
    echo "인치 센티미터<br>";
    echo "--------------------<br>";
    
    $inch = 10;
    
    while($inch <= 20) {
        $cm = $inch * 2.54;
        echo $inch."&nbsp; ".$cm."<br>";
        $inch += 2;
    }
    echo "--------------------<br>";
?>