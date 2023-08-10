<?php
    class Person {
        // 속성
        public $name;
        public $age;

        // 메소드
        public function intro() {
            echo "이름 : ".$this->name.", 나이 : ".$this->age;
        }
    }

    // 객체 생성
    $hong = new Person();

    $hong->name = "홍길동";
    $hong->age = 20;

    $hong->intro();
?>