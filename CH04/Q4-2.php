<?php
    function hap($start, $end) {
        $sum = 0;
        for ($i = $start; $i <= $end; $i++) {
            $sum += $i;
        }
        return $sum;
    }

    $start = 10;
    $end = 50;

    echo $start."에서 ".$end."까지의 정수 합계 : ".hap($start, $end);
?>