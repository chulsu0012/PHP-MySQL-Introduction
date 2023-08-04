<?php      
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
?>