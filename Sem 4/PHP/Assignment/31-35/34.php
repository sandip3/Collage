<!-- AIM: Create web pages to demonstrate passing information using Session. -->

<h1>Page 1</h1>
<h2>Name : Mishra sandip manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<p>Session variables set.</p>
<a href="34_5.php">Go to Page 2</a>

<?php
session_start();

$_SESSION['name'] = "Mishra Sandip Manoj";
$_SESSION['age'] = 20;
?>
