<?php
function Reverse_user($str)
{
    for ($i = strlen($str) - 1, $j = 0; $j < $i; $i--, $j++) {
        $x = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $x;
    }
    return $str;
}

// session
// Driver Code
$a = "This is my code";
echo (Reverse_user($a));

if(youWant() === true){
    youCan();
}
else{
    youCant();
}



?>
