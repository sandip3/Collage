<!-- AIM:Write a script to implement Simple Calculator for mathematical operations. -->

<?php
if (isset($_GET['op'])) {
    $a = $_GET['Num-1'];
    $b = $_GET['Num-2'];
    $op = $_GET['op'];
    $result = 0;

    if (is_numeric($a) && is_numeric($b)) {
        switch ($op) {
            case 'add':
                $result = $a + $b;
                break;
            case 'sub':
                $result = $a - $b;
                break;
            case 'mul':
                $result = $a * $b;
                break;
            case 'div':
                $result = $a / $b;
                break;
        }
    }
    else {
        echo "enter numeric value";
    }
}

?>

<h1>Name : Mishra sandip manoj</h1>
<h1>Enrollment No : 229768307002</h1>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="Num-1">Num-1</label>
    <input type="number" name="Num-1" id="num1" value="<?= $a ?>"></input>
    <br>
    <label for="Num-2">Num-2</label>
    <input type="number" name="Num-2" id="num2" value="<?= $b ?>"></input>
    <br>

    <label for="Result">Result</label>
    <input type="number" name="Result" id="result" value="<?= $result ?>" disabled></input>
    <br><br>

    <button type="submit" name="op" value="add"> + </button>
    <button type="submit" name="op" value="sub"> - </button>
    <button type="submit" name="op" value="mul"> * </button>
    <button type="submit" name="op" value="div"> / </button>
</form>
