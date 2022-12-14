<?php
    class bicycle{
        var $brand;
        var $model;
        var $year;
        var $description =  'Used bicycle';
        var $weight_kg = 0.0;

        function name(){
            return $this->brand . " " . $this->model . " (" . $this->year . ")"; 
        }

        function weight_lbs(){
            return floatval($this->weight_kg) * 2.2046226218;
        }

        function set_weight_lbs($value){
            $this->weight_kg = floatval($value) / 2.2046226218;
        }
    }

$test = new bicycle;
$test2 = new bicycle;

$test->brand = "Gazelle";
$test->model = "Man";
$test->year = "2020";
$test->weight_kg = 6.0;

$test2->brand = "Batavus";
$test2->model = "Vrouw";
$test2->year = "2022";
$test2->weight_kg = 5.0;


echo $test->name() . "<br />";
echo $test->weight_lbs() . "<br />";
echo $test->weight_kg . "<br />";
echo $test2->name() . "<br />";
echo $test2->weight_lbs() . "<br />";
echo $test2->weight_kg . "<br />";

$test->set_weight_lbs(2);
echo $test->weight_lbs() . "<br />";
echo $test->weight_kg . "<br />";
?>