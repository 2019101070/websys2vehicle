<?php
class Vehicle {
    public make;

    function set_make($make){
        $this->make = $make;
    }
    function get_make(){
        return $this->make;
    }

}

$mustang = new Vehicle ();
$toyota = new Vehicle();
$mustang->set_make('MUSTANG');
$toyota->set_make('TOYOTA');

echo $mustang->get_make();
echo "<br>";
echo $toyota->get_make();
?>
