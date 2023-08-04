<h2>결제 금액 계산하기</h2>
<?php
    $book = 10000;
    $discount = 10;
    $delivery = 2500;

    $total = $book - ($book * $discount / 100) + $delivery;

    echo "책 값 : ".$book."원<br>";
    echo "할인율 : ".$discount."%<br>";
    echo "배송료 : ".$delivery."원<br>";
    echo "- 결제 금액 : ".$total."원";
?>
