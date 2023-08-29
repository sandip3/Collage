<?php
// Overridding in PHP
class Base
{
   function display()
   {
      echo "<br>Base class function declared final!";
   }
   function demo()
   {
      echo "<br>Base class function!";
   }
}
class Derived extends Base
{
   function demo()
   {
      echo "<br>Derived class function!";
   }
}

echo "<h1>Name := Mishra Sandip </h1>";
echo "<h1>Enrollment no := 229768307002</h1>";

$ob = new Base;
$ob->demo();
$ob->display();
$ob2 = new Derived;
$ob2->demo();
$ob2->display();

?>
