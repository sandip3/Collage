<!-- AIM:Write a script to display a multiplication table for the given number -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<form method="get">
    <label for="Num-1">Table</label>
    <input type="number" name="Num-1"></input>

    <button type="submit" name="sub"> Submit </button>
</form>


<?php
if (isset($_GET['sub'])) {
    $x = $_GET['Num-1'];
    for ($i = 1; $i <= 10; $i++) {
        $t = $x * $i;
        echo "$x X $i = $t <br>";
    }
}

?>
