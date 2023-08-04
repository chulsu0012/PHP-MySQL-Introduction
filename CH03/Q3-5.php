<?php
    $cnt = 0;
    for ($i = 300; $i <= 350; $i++) {
        if ($i % 5 != 0){
            echo "$i ";
            $cnt++;
            
            if ($cnt % 10 == 0)
            echo "<br>";
        }
    }
?>