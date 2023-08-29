<?php
// Abastract class in PHP
abstract class a
{
    abstract public function dis1();
    abstract public function dis2();
}
class b extends a
{
    public function dis1()
    {
        echo "Hello ! <br>";
    }
    public function dis2()
    {
        echo "How are you?";
    }
}

echo "<h1>Name := Mishra Sandip </h1>";
echo "<h1>Enrollment no := 229768307002</h1>";
$obj = new b();
$obj->dis1();
$obj->dis2();

?>
