<?php
//echo 'q from livesearch.php: '.$q;

$sql="SELECT username FROM playground_demo_all_data WHERE full_name LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$full_name_results_array = [];

//debugging
//var_dump($result);
//var_dump($con);

echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
echo '<b>Query:</b> <br><br>'.$sql.'<br><br>';
echo '<b>Status:</b> <br><br>found '.$result->num_rows.' results in full_name field.<br><br>';
echo '<b>Results:</b> <br><br>';

//query results to array
while($row = mysqli_fetch_array($result)) {
    array_push($full_name_results_array,$row["username"]);
}

if(count($full_name_results_array)){
    foreach($full_name_results_array as $key => $value)
    {
        echo $value."<br>";
    }
} else {
    echo 'No results found';
}

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