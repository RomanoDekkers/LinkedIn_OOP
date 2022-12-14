<?php
    class Vehicle {
        var $Doors;
        var $Wheels;
        var $windows;

        function voertuig() {
            return $this->Doors . " " . $this->Wheels . " " . $this->Windows;
        }

        function is_allowed_on_highway(){
            return true;
        }
    }

    class motorbike extends Vehicle {
        function voertuig(){
            return $this->Wheels;
        }
    }

    class brommobiel extends Vehicle {
        function is_allowed_on_highway(){
            return false;
        }
    }

$auto =  new vehicle;
$motor =  new motorbike;
$brommobiel = new brommobiel;

$auto->Doors = 3;
$auto->Wheels = 4;
$auto->Windows = 4;

$motor->Doors = 4;
$motor->Wheels = 2;

$brommobiel->Doors = 3;
$brommobiel->Wheels = 4;
$brommobiel->Windows = 4;

echo $auto->voertuig() . "<br />";
echo $motor->voertuig() . "<br />";
echo $brommobiel->voertuig() . "<br />";

if($auto->is_allowed_on_highway() == true){
    echo "Dit voertuig mag op de snelweg <br />";
}
else{
    echo "Dit voertuig mag niet op de snelweg <br />";
}

if($motor->is_allowed_on_highway() == true){
    echo "Dit voertuig mag op de snelweg <br />";
}
else{
    echo "Dit voertuig mag niet op de snelweg <br />";
}

if($brommobiel->is_allowed_on_highway() == true){
    echo "Dit voertuig mag op de snelweg <br />";
}
else{
    echo "Dit voertuig mag niet op de snelweg <br />";
}

echo get_parent_class($auto) . "<br />";
echo get_parent_class($motor) . "<br />";
echo get_parent_class($brommobiel) . "<br />";
?>