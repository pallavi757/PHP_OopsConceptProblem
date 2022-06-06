<?php
// base class named "Jewellery"
class Jewellery {
     public function Jewellery() {
    echo "This class is Jewellery"."\n"; 

    } 

}

// derived class named "Necklace"

class Necklace extends Jewellery { 
    // public function Jewellery() {

    //     echo "This class is Necklace "; 

    // }  

}

// derived class named "Bracelet"

class Bracelet extends Jewellery {  
    // public function Display() {

    //     echo $this->Jewellery();

    // }  


}

// creating objects of 

// derived classes

// "Necklace" and "Bracelet"

$n = new Necklace();
$n->Jewellery();
$b = new Bracelet();
$b->Jewellery();
?>