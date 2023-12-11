<?php
include_once "Shape.php";
class Rectangle extends Shape {
    function __construct(public $width,
        public $height){}

    function calculateArea(){
        return $area = $width * $height;
    }
}