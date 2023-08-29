<!-- AIM: Write a script to encode a given message into equivalent Morse code. -->

<h2>Name : Mishra Sandip Manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php
$string = "dog";
$string_lower = strtolower($string);
$assoc_array = array(
    "a" => ".-",
    "b" => "-...",
    "c" => "-.-.",
    "d" => "-..",
    "e" => ".",
    "f" => "..-.",
    "g" => "--.",
    "h" => "....",
    "i" => "..",
    "j" => ".---",
    "k" => "-.-",
    "l" => ".-..",
    "m" => "--",
    "n" => "-.",
    "o" => "---",
    "p" => ".--.",
    "q" => "--.-",
    "r" => ".-.",
    "s" => "...",
    "t" => "-",
    "u" => "..-",
    "v" => "...-",
    "w" => ".--",
    "x" => "-..-",
    "y" => "-.--",
    "z" => "--..",
    "0" => "-----",
    "1" => ".----",
    "2" => "..---",
    "3" => "...--",
    "4" => "....-",
    "5" => ".....",
    "6" => "-....",
    "7" => "--...",
    "8" => "---..",
    "9" => "----.",
    "." => ".-.-.-",
    "," => "--..--",
    "?" => "..--..",
    "/" => "-..-.",
    " " => " "
);

for ($i = 0; $i < strlen($string_lower); $i++) {
    foreach ($assoc_array as $letter => $code) {
        if ($letter == $string_lower[$i]) {
            echo "$code<br/>";
        }
    }
}

?>
