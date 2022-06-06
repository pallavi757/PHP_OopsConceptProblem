<?php

interface ShapeExmp{

public function calcArea();

}

class SquareExmp implements ShapeExmp{

      private $side;

public function __construct($side){

$this->side = $side;

}

   public function calcArea(){

$area = $this->side * $this->side;

echo "Area of square = ".$area."\n";

}

}

class RectangleExmp implements ShapeExmp{

private $width1;

private $height1;

public function __construct($width1,$height1){

$this->width1 = $width1;

$this->height1 = $height1;

   }

public function calcArea(){

$area = $this->width1 * $this->height1;

echo "Area of rectangle = ".$area."\n";

   }

}

class TriangleExmp implements ShapeExmp{

private $cons1;

private $width1;

private $height1;

public function __construct($cons1,$width1,$height1){

$this->cons1 = $cons1;

$this->width1 = $width1;

$this->height1 = $height1;

   }

public function calcArea(){

$area = $this->cons1 * $this->width1 * $this->height1;

echo "Area of triangle= ".$area;

   }

}

$squ = new SquareExmp(8);

$squ->calcArea();

$rect = new RectangleExmp(10,15);

$rect->calcArea();

$tri = new TriangleExmp(0.5,10,12);

$tri->calcArea();
?>