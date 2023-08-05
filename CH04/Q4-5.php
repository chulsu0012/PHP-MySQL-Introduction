<?php
    function cost($category, $group, $age) {
        if ($category == "일반") {
            if ($group == "개인") {
                if ($age <= 7)
                    $fee = 6000;
                elseif ($age <= 18)
                    $fee = 7000;
                else 
                    $fee = 9500;
            } else {
                if ($age <= 7)
                    $fee = 5000;
                elseif ($age <= 18)
                    $fee = 6000;
                else 
                    $fee = 8500;
            }
        } else {
            if ($group == "개인") {
                if ($age <= 7)
                    $fee = 5000;
                elseif ($age <= 18)
                    $fee = 6000;
                else 
                    $fee = 8500;
            } else {
                if ($age <= 7)
                    $fee = 4000;
                elseif ($age <= 18)
                    $fee = 5000;
                else 
                    $fee = 7500;
            }
        }

        return $fee;
    }

    $category = "일반";
    $group = "개인";
    $age = 15;

    echo "구분 : ".$category."<br>";
    echo "개인/단체 : ".$group."<br>";
    echo "나이 : ".$age."<br>";
    echo "입장료는 ".cost($category, $group, $age)."원 입니다."; 
?>