<?php
// constractor in PHP
class Point {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
        echo "x = ".$x.", y = ".$y."<br>";
    }
}

echo "<h1>Name := Mishra Sandip </h1>";
echo "<h1>Enrollment no := 229768307002</h1>";
$p1 = new Point(4, 5);
$p2 = new Point(4);

?>
