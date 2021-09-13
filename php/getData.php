<?php
//echo 'q from livesearch.php: '.$q;

$sql="SELECT username FROM playground_demo_all_data WHERE full_name LIKE '".$q."' LIMIT 5";
$result = mysqli_query($con,$sql);
echo '<pre>';
var_dump($sql);
var_dump($con);
echo '</pre>';