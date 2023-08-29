<!-- AIM: Write a script to demonstrate multilevel inheritance -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php
class A
{
    public function x()
    {
        echo "Sandip<br>";
    }
}

class B extends A
{
    public function y()
    {
        echo "Pradip<br>";
    }
}

class C extends B
{
    public function z()
    {
        echo "Sandy<br>";
    }
}

$c = new C();
$c->x();
$c->y();
$c->z();

?>
