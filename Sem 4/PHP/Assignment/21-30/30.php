<!-- AIM: Write a script to demonstrate cloning objects. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

class x
{
    public $color;
    public $amount;
}

$obj = new x();
$obj->color = "Yellow";
$obj->amount = 50;

$copy = clone $obj;

echo ("Color : " . $obj->color . "<br>");
echo ("Amount : " . $obj->amount);

?>
