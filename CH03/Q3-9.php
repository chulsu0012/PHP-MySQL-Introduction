<?php
    $string = "";
    $string .= "<table border='1' width='300'>";
    $string .= "<tr><th>달러</th><th>원화</th><th>유로</th></tr>";
    
    for ($dollar = 10; $dollar <= 20; $dollar += 2) {
        $won = $dollar * 1180.60;
        $euro = $dollar * 1350.30;
        $string .= "<tr><th>$dollar</th><th>$won</th><th>$euro</th></tr>";
    }

    $string .= "</table>";
    echo $string;
?>