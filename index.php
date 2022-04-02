<?php
class Vehicle {
    private $make;

    public function set_make($make) 
    {
         $this->make = $make;
    }
    public function beep()
    {
        return "beep! I am a " . $this->make . "<br>";
    }
}

class Car extends Vehicle
{

}
$car1 = new Car();
$car1->set_make('Mustang');

echo $car1->beep();
?>
