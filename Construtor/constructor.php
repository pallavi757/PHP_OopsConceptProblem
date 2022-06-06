<?php
class Fruit{
public $name;
function __construct($name){
    $this->name=$name;
}
//method to get name
function get_name()
{
    return $this->name;
}
}
//create object of fruit class
$apple=new Fruit("Apple");
echo $apple->get_name();
?>