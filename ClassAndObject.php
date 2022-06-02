<?php
/* calculate perimeter and area of reactangle using class and objects */
class Rectangle
{
    // Declare  properties
    public $length = 0;
    public $width = 0;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    }
}
// Create a new object from Rectangle class
$obj = new Rectangle;
// Get the object properties values
// echo $obj->length."\n"; // 0utput: 0
// echo $obj->width."\n"; // 0utput: 0
 
// Set object properties values
$obj->length = 30;
$obj->width = 20;

echo $obj->length; // 0utput: 30
echo" ";
echo $obj->width ; // 0utput: 20
//echo "Perimemter of rectanle is: \n";
echo "\nPerimemter of rectanle is:".$obj->getPerimeter(); 
//echo "Area of rectanle is:\n";
echo"\nArea of rectanle is:". $obj->getArea(); 

?>