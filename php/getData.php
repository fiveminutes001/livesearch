<?php
//echo 'q from livesearch.php: '.$q;

$sql="SELECT username FROM playground_demo_all_data WHERE full_name LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);

echo '<pre>';
var_dump($sql);
var_dump($result);
echo '<br>';
echo $result->num_rows;
echo '<br>';

while($row = mysqli_fetch_array($result)) {
var_dump($row["username"]);}

var_dump($con);
echo '</pre>';

// echo "<table>
// <tr>
// <th>Firstname</th>
// <th>Lastname</th>
// <th>Age</th>
// <th>Hometown</th>
// <th>Job</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['FirstName'] . "</td>";
//   echo "<td>" . $row['LastName'] . "</td>";
//   echo "<td>" . $row['Age'] . "</td>";
//   echo "<td>" . $row['Hometown'] . "</td>";
//   echo "<td>" . $row['Job'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";