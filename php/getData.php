<?php
//echo 'q from livesearch.php: '.$q;

class query {
// 	// property declaration
    public $column;
    public $results_array = [];
    
	public function __construct($column)
	{
			$this->$column = $column;
	}
	
	// method declaration
    public function query_results($column){
        $sql="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
        $result = mysqli_query($con,$sql);
    }    
    
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

echo '<pre>';
// functions

//mail

$mail = new query('mail');
$mail->output_text($sql,$result,$column);
$mail->query_results_to_array($results_array[$column],$result,$column);

//username
$column = 'username';
$sql="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];

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