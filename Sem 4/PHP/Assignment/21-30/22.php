<!-- Aim:- Write a script to create an object of a class and access its public properties and methods. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class MyClass
{
    public $name = "Mishra Sandip";
    public $age = 30;

}

$obj = new MyClass();

echo "Name: " . $obj->name . "<br>";
echo "Age: " . $obj->age . "<br>";

?>
