<?php
   Interface MyInterface {
      //declaration of  methods 
      public function getName();
      public function getAge();
      public function getDetails($name,$age);
   }
   class MyClass implements  MyInterface{
      public function getName() {
            echo "My name A"."\n";
      }
      public function getAge(){
            echo "My Age 12"."\n";
      }
      public function getDetails($name,$age)
      {
          echo"My name is:".$name ." and I am ".$age." years old"."\n";

      }
   }
   $obj = new MyClass;
   $obj->getName();
   $obj->getAge();
   $obj->getDetails("Ram",23);
?>