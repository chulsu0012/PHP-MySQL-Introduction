<?php      
    $pay = 5000;
    $price = 1000;
    $num = 3;
    
    $change = $pay - $price * $num;

    echo "지불 금액 : $pay<br>";
    echo "물건 가격 : $price<br>";
    echo "구매 개수 : $num<br>";
    echo "- 거스름돈 : $change<br>";
?>