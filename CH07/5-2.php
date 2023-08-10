<?php
  class Member { 
    public $name;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
  }  

  $mem = new Member();

  $mem->setName("홍길동");
  echo "이름 : ".$mem->getName();
?>