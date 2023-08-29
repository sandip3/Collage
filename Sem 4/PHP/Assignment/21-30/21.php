<!-- Aim:- Write a script to define a class With constructor and destructor -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class MyClass
{
    public function __construct()
    {
        echo "Constructor called.<br>";
    }

    public function __destruct()
    {
        echo "Destructor called.<br>";
    }
}

$obj = new MyClass();

?>
