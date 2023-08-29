<!-- AIM:Write a script that reads the name of the car and displays the name of the company the car belongs to. -->

<h1>Name : Mishra sandip manoj</h1>
<h1>Enrollment No : 229768307002</h1>

<form>
        <label for="car">Select Your Company</label><br><br>
        <select name="car">
            <option value="bmw">Bmw</option>
            <option value="mer">Mercides</option>
            <option value="suzu">Suzuki</option>
            <option value="mahi">Mahindra</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Submit</button>
</form>


<?php
if (isset($_GET['submit'])) {

    $a = $_GET['car'];

    switch ($a) {
        case 'bmw':
            echo "This all are models of BMW.<br>";
            echo "<br>x1<br>x2<br>x3<br>x4<br>x5";
            break;

        case 'mer':
            echo "This all are models of Mercides.<br>";
            echo "<br>S-Maybach<br>4-matic<br>GLS<br>Amg";
            break;

        case 'suzu':
            echo "This all are models of Maruti-Suzuki.<br>";
            echo "<br>Waganar<br>shift<br>Desire<br>Alto 800";
            break;

        case 'mahi':
            echo "This all are models of Mahindra.<br>";
            echo "<br>Thar<br>XUV 500<br>Scorpio<br>XUV 700";
            break;
    }
}

?>
