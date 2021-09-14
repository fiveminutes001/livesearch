<?php
//echo 'q from livesearch.php: '.$q;

class query {
    
    // property declaration
    public $column;
    public $result;
    public $results_array = [];
    public $top_five_results_array = [];
    public $sql;
    public $q;
    
	public function __construct($column,$con,$q,$column_two = null, $column_three = null)
	{
       
        $this->column = $column;
        $this->q = $q;
        $this->con = $con;
        
        $single_column_sql ="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '".$q."%' LIMIT 5";
        $two_column_sql ="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '".$q."%' AND ".$column_two." LIKE '".$q."%' LIMIT 5";
        $three_column_sql ="SELECT username FROM playground_demo_all_data WHERE ".$column." LIKE '".$q."%' AND ".$column_two." LIKE '".$q."%' AND ".$column_three." LIKE '".$q."%' LIMIT 5";
        
        $this->sql = $column && $column_two && $column_three ? $three_column_sql :(($column&&$column_two)? $two_column_sql : $single_column_sql);
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
        
        $this->top_five_results_array = $arr;

        if(count($arr) && $this->q!=''){
            foreach($arr as $key => $value)
            {
                echo $value."<br>";
            }
        } else {
            echo 'No results found';
        }
        echo '</pre>';
        return $this;
    }

    //output text
    public function output_text(){
        echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
        echo '<b>Query:</b> <br><br>'.$this->sql.'<br><br>';
        echo '<b>Status:</b> <br><br>found '.$this->result->num_rows.' results in '.$this->column.' field.<br><br>';
        echo '<b>Results:</b> <br><br>';

        return $this;
    }

    //return top_five_results_array
    public function return_top_five_results_array(){
        return $this->top_five_results_array;
    }
}

//triple columns functions
//full_name and mail and username
$full_name_and_mail_and_username = new query('full_name',$con, $q,'mail','username');
$full_name_and_mail_and_username->query_results()->output_text()->query_results_to_array();

//double columns functions
//full_name and mail
$full_name_and_mail = new query('full_name',$con, $q,'mail');
$full_name_and_mail->query_results()->output_text()->query_results_to_array();

//full_name and username
$full_name_and_username = new query('full_name',$con, $q,'username');
$full_name_and_username->query_results()->output_text()->query_results_to_array();

//mail and username
$mail_and_username = new query('mail',$con, $q,'username');
$mail_and_username->query_results()->output_text()->query_results_to_array();

//single columns functions
//full_name
$full_name = new query('full_name',$con, $q);
$top_five_results_array = $full_name->query_results()->output_text()->query_results_to_array()->return_top_five_results_array();
var_dump($top_five_results_array);
//mail
$mail = new query('mail',$con, $q);
$mail->query_results()->output_text()->query_results_to_array();
//username
$username = new query('username',$con, $q);
$username->query_results()->output_text()->query_results_to_array();
//region
$username = new query('region',$con, $q);
$username->query_results()->output_text()->query_results_to_array();
//department
$username = new query('department',$con, $q);
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