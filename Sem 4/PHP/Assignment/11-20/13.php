<!-- AIM: Consider a currency system in Which there are notes of 7 denominations, namely Rs. 1, Rs. 2, Rs. 5, Rs. 10, Rs. 20, Rs. 50 and Rs. 100. Write a function that computes the smallest number of notes that Will combine for a given amount of money. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php

function countCurrency($amount)
{
    $notes = array(2000, 500, 200, 100, 50, 20, 10, 5, 1);
    $noteCounter = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    for ($i = 0; $i < 9; $i++) {
        if ($amount >= $notes[$i]) {
            $noteCounter[$i] = intval($amount / $notes[$i]);
            $amount = $amount % $notes[$i];
        }
    }
    echo ("Currency Count :-- <br><br>");
    for ($i = 0; $i < 9; $i++) {
        if ($noteCounter[$i] != 0) {
            echo ($notes[$i] . " : " . $noteCounter[$i] . "<br>");
        }
    }
}

$amount = 868;
echo "<h4>Amount : $amount <br> </h4>";
countCurrency($amount);


?>
