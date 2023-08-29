<?php
// overloading in PHP
class shape {
    function __call($name_of_function, $arguments) {

        if($name_of_function == 'area') {
             
            switch (count($arguments)) {
                case 1:
                    return 3.14 * $arguments[0];
                         
                case 2:
                    return $arguments[0]*$arguments[1];
            }
        }
    }
}
$s = new Shape;

echo "<h1>Name := Mishra Sandip </h1>";
echo "<h1>Enrollment no := 229768307002</h1>";

echo("Area of Circle = ".$s->area(2)."<br>");
echo ("Area of Rectangle = ".$s->area(4,2)."<br>");

?>
