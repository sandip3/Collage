<!-- AIM:Write a script to take the basic salary of an employee as input and calculate the net payment to any employee. -->

<h1>Name : Mishra sandip manoj"</h1>
<h1>Enrollment No : 229768307002"</h1>

<form method="post">
    <div>
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary" value=""></input>
        <button type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>


<?php
if (isset($_POST['submit'])) {
    $basic_salary = $_POST['salary'];
    $dallowance = 0.50 * $basic_salary;
    $house_rent = 0.10 * $basic_salary;
    $medical = 0.04 * $basic_salary;
    $gross_salary = $basic_salary + $dallowance + $house_rent + $medical;

    $insurance = 0.07 * $gross_salary;
    $pf = 0.05 * $gross_salary;
    $deduction = $insurance + $pf;
    $net_salary = $gross_salary - $deduction;
    
    echo "Basic_salary:" . "$basic_salary" . "<br>";
    echo "DA:" . "$dallowance" . "<br>";
    echo "HRA:" . "$house_rent" . "<br>";
    echo "Medical:" . "$medical" . "<br>";
    echo "Gross_salary:" . "$gross_salary" . "<br>";
    echo "Insurance:" . "$insurance" . "<br>";
    echo "PF:" . "$pf" . "<br>";
    echo "Deduction:" . "$deduction" . "<br>";
    echo "Net_salary:" . "$net_salary" . "<br>";

}

?>
