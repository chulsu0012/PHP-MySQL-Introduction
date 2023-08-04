<?php
    // 정수
    $a = 15;
    var_dump($a);
    echo "<br><br>";

    // 실수      
    $a = -122.358;
    var_dump($a);
    echo "<br><br>";

    //문자열
    $x = 'apple';
    $y = "사과";
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br><br>";

    //bool
    $x = 5 > 3;
    $y = 5 < 3;
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br><br>";

    // 배열
    $x = array("빨강", "노랑", "파랑");
    var_dump($x);
    echo "<br><br>";

    // 객체, 클래스
    class Hello {
        public $name = "홍길동";
        function say_hello() {
            return $this->name."님 안녕하세요.";
        }
    }

    $message = new Hello();
    echo $message->say_hello();
    echo "<br>";

    var_dump($message);
    echo "<br><br>";
    
    // NULL
    $x = NULL;
    var_dump($x);
    echo "<br><br>";

    // 리소스
    $file = fopen("CH2-test.txt", "r");
    var_dump($file);
?>