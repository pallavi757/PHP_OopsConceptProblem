<?php

// base class named "Jewellery"
class Jewellery {
   public $cost = 10000;
    public function printName($name) {
    echo "This is base class: Jewellery & name of jewellery is: " . $name."\n"; 
    } 
}

// derived class named "Necklace"

class Necklace extends Jewellery {

    public function printName($name) {

        echo "This is child class: Necklace & name of jewellery is:" . $name."\n" ;

       // this class can access 

        // data member of its parent class.

        echo "Price is: " . $this->cost ;

    }

}
//create object to call base class method
$f = new Jewellery();
//create object to call child class method
$s = new Necklace();
 $f->printName("Ring"); 
$s->printName("Necklace");
?>