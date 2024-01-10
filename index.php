<?php
//class Car{
//
//
//    // public are called access modifiers.
//    public $color;
//    public $make;
//    public $model;
//    public $engineSize;
//
//
//
//    // class method
//    public function accelerate(){
//
//    }
//
//    public function brake() {
//
//    }
//
//    public function turn($direction){
//
//    }
//}
//
//// Instantiating
//$myCar = new Car();
//$myCar->color = 'Red';
//$myCar->make = 'Toyota';
//$myCar->model = 'Camry';
//$myCar->enginesize = '6.8LpQ';
//
//
//$myCar->accelerate();
//$myCar->turn('left');
//$myCar->brake();


class myClass{
    public $property1;
    public $property2;
    
    public function __construct(){
        $this->property1 = 8;
        $this->property2 = 2;
        
    }
    
    public function myMethod() {
        $result = $this->property1 + $this->property2;
        echo "The value of the property 1 is" .$this->property1 . "<br>";
        echo "The value of the property 2 is" .$this->property2 . "<br>";
        echo "The Result of adding propertise is" . $result;
    }
}

$myObject = new myClass();

//$myObject->property1 = 8;
//$myObject->property2 = 2;

$myObject->myMethod();





?>
