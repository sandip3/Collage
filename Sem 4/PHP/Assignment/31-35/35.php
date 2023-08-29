<!-- AIM: Write a script to convert an associative array into JSON string format and vice versa. -->

<h2>Name : Mishra sandip manoj</h2>
<h2>Enrollment No : 229768307002</h2>

<?php
$std = array(
    'Name' => 'Sandip',
    'Enrollment Number' => '229768307002',
    'Branch' => 'Computer'
);
echo json_encode($std);
?>
