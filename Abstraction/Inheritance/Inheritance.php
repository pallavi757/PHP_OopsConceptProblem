<?php
/* Program for inheritance concept */
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
//Derived a square class from rectanle
class Square extends Rectangle
{   
    // Method to test if the rectangle is also a square
    public function isSquare(){
        if($this->length == $this->width){
            return true; // Square
        } else{
            return false; // Not a square
        }
    }
}
// Create a new object from Rectangle class
//$obj = new Rectangle;
// Create a new object from Square class
$obj = new Square;
$obj->length = 30;// Set object properties values
$obj->width = 20;
echo"\nPerimemter of rectanle is:".$obj->getPerimeter(); 
$obj->length = 20;// Set object properties values
$obj->width = 20;
// Call the object methods
if($obj->isSquare()){
    echo "The area of the square is:";
} else{
    echo "The area of the rectangle is: ";
};
//echo "Area of rectanle is:\n";
echo $obj->getArea(); 

?>