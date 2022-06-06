<?php

abstract class shapeExmp{

abstract protected function calcArea();

}

class rectangleExmp extends shapeExmp{

var $x,$y;

public function __construct($x , $y){

$this->x=$x;

$this->y=$y;

}

public function calcArea(){

$a=$this->x*$this->y;

return $a;

}

}

class circleExmp extends shapeExmp{

var $r;

public function __construct($r){

$this->r=$r;

     }

public function calcArea(){

$pi=3.142;

$a=pow($this->r,2)*$pi;

return $a;

     }

}

class squareExmp extends shapeExmp{

var $s;

public function __construct($s){

$this->s=$s;

     }

public function calcArea(){

$a=$this->s * $this->s;

return $a;

     }

}

$rect=new rectangleExmp(8,10);

$area=$rect->calcArea();

echo "Rectangle area=". $area."\n";

$circ=new circleExmp(5);

$area=$circ->calcArea();

echo "Cirlce area=".$area."\n";

$squ=new squareExmp(7);

$area=$squ->calcArea();

echo "Square area=" .$area;
?>