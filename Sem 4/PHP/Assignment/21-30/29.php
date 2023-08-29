<!-- AIM: Write a script to demonstrate a simple abstract class. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

abstract class a
{
    abstract public function dis1();
    abstract public function dis2();
}
class b extends a
{
    public function dis1()
    {
        echo "Sandip";
    }
    public function dis2()
    {
        echo "<br> Mishra";
    }
}
$obj = new b();
$obj->dis1();
$obj->dis2();
?>
