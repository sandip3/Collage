<!-- AIM: Write a script to demonstrate method overloading based on the number of arguments. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class MyClass
{
    public function num($a, $b = null, $c = null)
    {
        if ($c !== null) {
            $n = $a + $b + $c;
        } elseif ($b !== null) {
            $n = $a + $b;
        } else {
            $n = $a * 2;
        }

        return $n;
    }
}

$obj = new MyClass();

$x = $obj->num(5);
$y = $obj->num(5, 10);
$z = $obj->num(5, 10, 15);

echo "Result 1: " . $x . "<br>";
echo "Result 2: " . $y . "<br>";
echo "Result 3: " . $z . "<br>";

?>
