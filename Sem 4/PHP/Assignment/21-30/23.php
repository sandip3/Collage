<!-- Aim:-Write a script that uses the set attribute and get attribute methods to access a class’s private attributes of a class -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class MyClass
{
    private $name;
    private $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

// Create an object of MyClass
$obj = new MyClass();

// Set values using setter methods
$obj->setName("Mishra Sandip");
$obj->setAge(18);

// Get values using getter methods
echo "Name: " . $obj->getName() . "<br>";
echo "Age: " . $obj->getAge() . "<br>";

?>
