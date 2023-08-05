<?php
    function cost($category, $age) {
        if ($category == "조조") {
            if ($age > 18 and $age < 65)
                $fee = 9000;
            else
                $fee = 7000;
        }
        else {
            if ($age >= 65)
                $fee = 7000;
            elseif ($age > 18)
                $fee = 13000;
            else
                $fee = 1000;
        }

        return $fee;
    }

    $category = "일반";
    $age = 70;

    echo "구분 : ".$category."<br>";
    echo "나이 : ".$age."<br>";
    echo "입장료는 ".cost($category, $age)."원 입니다."; 
?>