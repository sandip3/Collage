<!-- AIM: Create a web page using a form to collect employee information.. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<form method="POST" >
    Enter EMP No: <br> <input type="text" name="eno"><br>
    Enter EMP Name: <br> <input type="text" name="name"><br>
    Enter Address: <br> <input type="text" name="addr"><br>
    <input type="submit" value="Submit">
</form>

<?php

session_start();
$_SESSION["eno"] = $_POST["eno"];
$_SESSION["name"] = $_POST["name"];
$_SESSION["addr"] = $_POST["addr"];

echo "Emp No: " . $_SESSION['eno'] . "<br>";
echo "Emp name: " . $_SESSION['name'] . "<br>";
echo "Address: " . $_SESSION['addr'] . "<br>";
?>
