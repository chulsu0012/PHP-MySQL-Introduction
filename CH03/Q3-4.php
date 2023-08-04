<?php
    $i = 1;

    while($i <= 100) {
        if ($i % 3 == 0)
            echo "$i ";
        if ($i % 30 == 0)
            echo "<br>";
            
        $i++;
    }
?>