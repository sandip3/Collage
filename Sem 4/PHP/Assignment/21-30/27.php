<!-- AIM: Write a script to demonstrate method overloading. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class MyClass
{
    public function calculate($arg1, $arg2 = null)
    {
        if ($arg2 === null) {
            return $arg1 * 2;
        } else {
            return $arg1 + $arg2;
        }
    }
}

$obj = new MyClass();

$result1 = $obj->calculate(5);
$result2 = $obj->calculate(5, 10); 

echo "Result 1: " . $result1 . "<br>";
echo "Result 2: " . $result2 . "<br>";

?>
