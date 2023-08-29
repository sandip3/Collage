<!-- Aim:- Write a script to demonstrate single inheritance -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class Animal
{
    public function eat()
    {
        echo "Animal is eating.<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "Dog is barking.<br>";
    }
}

$dog = new Dog();
$dog->eat();
$dog->bark();

?>
