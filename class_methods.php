<?php   

class Student {
    
    var $first_name;
    var $last_name;
    var $country = 'none';

    function say_hello(){
        return 'Hello World!';
    }

    function full_name(){
        return $this->first_name . " " . $this->last_name; 
    }

}

$student1 = new Student;
$student1->first_name = 'Romano';
$student1->last_name = 'Dekkers';

$student2 = new Student;
$student2->first_name = 'Daan';
$student2->last_name = 'de Klein';

echo $student1->full_name() . "<br />";

echo $student2->full_name() . "<br />";

echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

    if(method_exists('Student', 'say_hello')){
        echo "Method say_hello() exists in Student class.<br />";
    } else{
        echo "Method say_hello() does not exist in Student class.<br />";
    }
?>