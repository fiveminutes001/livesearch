<?php
//echo 'q from livesearch.php: '.$q;


class query {
// 	// property declaration
//     public $content;
//     public $green_link;
//     public $red_link;
//     public $current_link;

	// public function __construct($sql = null ,$result = null ,$column = null, $arr = null)
	// {
	// 		$this->$arr = $arr;
	// 		$this->$arr = $arr;
	// 		$this->$arr = $arr;
	// 		$this->$arr = $arr;
	// }
	
	// method declaration

    public function query_results_to_array($arr, $result,$column){
        while($row = mysqli_fetch_array($result)) {
            array_push($arr,$row["username"]);
        }
        
        if(count($arr)){
            foreach($arr as $key => $value)
            {
                echo $value."<br>";
            }
        } else {
            echo 'No results found';
        }

        return $arr;
    }

    //output text
    public function output_text($sql,$result,$column){
        echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
        echo '<b>Query:</b> <br><br>'.$sql.'<br><br>';
        echo '<b>Status:</b> <br><br>found '.$result->num_rows.' results in '.$column.' field.<br><br>';
        echo '<b>Results:</b> <br><br>';
    }
}

// functions

//mail
$column = 'mail';
$sql="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];
$mail = new query();
$mail->query_results_to_array($sql,$result,$column);
$mail->query_results_to_array($results_array[$column],$result,$column);

//username
$column = 'username';
$sql="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];

output_text($sql,$result,$column);
query_results_to_array($results_array[$column],$result,$column);

echo '</pre>';

//full name
$column = 'full_name';
$sql="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];

output_text($sql,$result,$column);
query_results_to_array($results_array[$column],$result,$column);

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