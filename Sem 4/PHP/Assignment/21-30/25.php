<!-- Aim:- Write a script to demonstrate multiple inheritance -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

interface Animal
{
    public function eat();
}

interface CanBark
{
    public function bark();
}

class Dog implements Animal, CanBark
{
    public function eat()
    {
        echo "Dog is eating.<br>";
    }

    public function bark()
    {
        echo "Dog is barking.<br>";
    }
}

$dog = new Dog();
$dog->eat();
$dog->bark();

?>
