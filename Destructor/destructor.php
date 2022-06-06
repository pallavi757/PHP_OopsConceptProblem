<?php
class Fruit{
public $name;
function __construct($name){
    $this->name=$name;
}
function __destruct()
{
   echo "destroying ". $this->name ."\n";
}
}
// function get_name()
// {
//     return $this->name;
// }

//}
$apple=new Fruit("Apple");
//echo $apple->get_name();
?>