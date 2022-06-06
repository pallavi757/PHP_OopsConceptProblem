<?php

// base class named "Jewellery"

class Jewellery {

    public function totalCost() {

        return  "total jewellery cost: 600000";

    }  

}

// derived class named "Necklace"

// inherited form class "Jewellery"

class Necklace extends Jewellery {

    public function necklace() {

        return  " necklace cost: 450000";

    }

}

// derived class named "Pendant"

// inherited form class "Necklace"

class Pendant extends Necklace {

    public function pendantCost() {

        return  "pendant cost: 600000";

    }

       public function priceList() {

        echo "1. " .$this->totalCost() ."\n";

        echo "2. " .$this->necklace() . "\n";

        echo "3. " .$this->pendantCost() . "\n";

    }

} 

// creating object of 

// the derived class

$obj = new Pendant();

$obj->priceList();

?>