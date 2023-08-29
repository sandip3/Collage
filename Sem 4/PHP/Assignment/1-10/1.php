<!-- AIM:Write a script to display Fibonacci numbers up to given term. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

$a = 0;
$b = 1;

echo "<h3>Fibonacci :-</h3> <br>  $a <br> $b <br>";

for ($i = 3; $i <= 10; $i++) {
    $c = $a + $b;
    echo " $c <br>";
    $a = $b;
    $b = $c;
}

?>
