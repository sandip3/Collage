<?php
    // Deconstructer in PHP
    class MyDestructableClass 
    {
        function __construct() {
            print "In constructor <br>";
        }

        function __destruct() {
            print "Destroying " . __CLASS__ . "<br>";
        }
    }

echo "<h1>Name := Mishra Sandip </h1>";
echo "<h1>Enrollment no := 229768307002</h1>";

    $obj = new MyDestructableClass();

    ?>
