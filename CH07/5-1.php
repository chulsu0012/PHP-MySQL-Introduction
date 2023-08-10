<?php
  class Member { 
    public $name;
    private $age;

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
  }  

  $mem = new Member();

  $mem->name = "홍길동"; //외부에서도 접근 가능
  echo "이름 : ".$mem->getName()."<br>";
  $mem->age = 10; // 접근 오류 발생
  echo "나이 : ".$mem->getAge();
?>