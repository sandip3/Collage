<?php
session_start();
?>

<h1>Page 2</h1>
<h2>Name : Mishra sandip manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<p>Received information from Page 1:</p>
<?php
// Retrieve session variables
$name = $_SESSION['name'];
$age = $_SESSION['age'];
echo "<p>Name: $name</p>";
echo "<p>Age: $age</p>";
?>
