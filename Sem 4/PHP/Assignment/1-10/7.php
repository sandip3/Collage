<!-- AIM: Write a script to read the marks of 4 subjects and display the result. -->

<h1>Name : Mishra sandip manoj"</h1>
<h1>Enrollment No : 229768307002"</h1>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="OS">OS :- </label> <br>
    <input type=" number " name="OS" id="OS" value=""><br> <br>

    <label for="PYTHON">PYTHON :- </label> <br>
    <input type=" number " name="PYTHON" id="PYTHON" value=""><br> <br>

    <label for="CN">CN :- </label> <br>
    <input type=" number " name="CN" id="CN" value=""><br> <br>

    <label for="IWD">IWD :- </label> <br>
    <input type=" number " name="IWD" id="IWD" value=""><br> <br>

    <br>
    <div>
        <button type="submit" name="submit" value="submit">Submit</button>
</form>

<?php
if (isset($_GET['submit'])) {
    $a = $_GET['OS'];
    $b = $_GET['PYTHON'];
    $c = $_GET['CN'];
    $d = $_GET['IWD'];
    $sum = $a + $b + $c + $d;
    $per = $sum / 4 * 100;
    if ($a <= 35 || $b <= 35 || $c <= 35 || $d <= 35) {
        echo "Fail";
    } else {
        if ($per >= 85) {
            echo "AA";
        } elseif ($per >= 75) {
            echo "AB";
        } elseif ($per >= 65) {
            echo "BB";
        } elseif ($per >= 55) {
            echo "BC";
        } elseif ($per >= 45) {
            echo "CC";
        } elseif ($per >= 40) {
            echo "CD";
        } elseif ($per >= 35) {
            echo "DD";
        }
    }
}

?>
