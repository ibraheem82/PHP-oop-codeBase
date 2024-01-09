<?php
class Car{
    
    
    // public are called access modifiers.
    public $color;
    public $make;
    public $model;
    public $engineSize;
    
    
    
    // class method
    public function accelerate(){
        
    }
    
    public function brake() {
        
    }
    
    public function turn($direction){
        
    } 
}

// Instantiating
$myCar = new Car();
$myCar->color = 'Red';
$myCar->make = 'Toyota';
$myCar->model = 'Camry';
$myCar->enginesize = '6.8LpQ';


$myCar->accelerate();
$myCar->turn('left');
$myCar->brake();


?>