<?php

class Car
{
    // property: is like variable

    // visibility modifiers (encapsulation): like access modifiers

    // Note: It is recomended to not assign values to the properties 
    // so that it can be assigned later when we create object and not be pre determined 

    private $brand;
    private $color;
    // private is only visable to this class called Car has access to ths property 
    // not the other classes


    protected $seats;
    // protected is visable to to this class and children of this class
    // not the other classes

    public $carType  = "hybrid";
    // public is visable to all classes not just this class or its children
    // but to use this often is not recommended

    // method: is like function

    //Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    //Method
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ", Color: " . $this->color;
    }
    // Getter and Setter Methods to access private properties
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
}
