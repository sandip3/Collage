<!-- AIM: Write a script to perform 3 x 3 matrix Multiplication. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php
$a = array(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3)
);
$b = array(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3)
);
$r = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 3; $k++) {
            $r[$i][$j] = $a[$i][$k] * $b[$k][$j];
        }
    }
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $r[$i][$j];
    }
    echo "<br>";
}

?>
