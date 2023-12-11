<?php
abstract class Shape{
    function __construct(public $color){}
    abstract public function calculateArea();
}