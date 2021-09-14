<?php
//echo 'q from livesearch.php: '.$q;

class query {
    
    // property declaration
    public $column;
    public $result;
    public $results_array = [];
    public $sql;
    public $q;
    
	public function __construct($column,$con,$q)
	{
			$this->column = $column;
			$this->q = $q;
			$this->con = $con;
			$this->sql = "SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '%".$q."%' LIMIT 5";
   	}
	
	// method declaration
    public function query_results(){        
        $this->result = mysqli_query($this->con,$this->sql);
        return $this;
    }    
    
    public function query_results_to_array(){
       $arr = $this->results_array;

        while($row = mysqli_fetch_array($this->result)) {
            array_push($arr,$row["username"]);
        }
     
        if(count($arr) && $this->q!=''){
            foreach($arr as $key => $value)
            {
                echo $value."<br>";
            }
        } else {
            echo 'No results found';
        }
        echo '</pre>';
        return $this;;
    }

    //output text
    public function output_text(){
        echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
        echo '<b>Query:</b> <br><br>'.$this->sql.'<br><br>';
        echo '<b>Status:</b> <br><br>found '.$this->result->num_rows.' results in '.$this->column.' field.<br><br>';
        echo '<b>Results:</b> <br><br>';

        return $this;
    }
}

//functions
//full_name
$full_name = new query('full_name',$con, $q);
$full_name->query_results()->output_text()->query_results_to_array();
//mail
$mail = new query('mail',$con, $q);
$mail->query_results()->output_text()->query_results_to_array();
//username
$username = new query('username',$con, $q);
$username->query_results()->output_text()->query_results_to_array();

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