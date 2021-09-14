<?php

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

    public function output_text(){
        echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
        echo '<b>Query:</b> <br><br>'.$this->sql.'<br><br>';
        echo '<b>Status:</b> <br><br>found '.$this->result->num_rows.' results in '.$this->column.' field.<br><br>';
        echo '<b>Results:</b> <br><br>';

        return $this;
    }

    public function return_top_five_results_array_local(){
        return $this->top_five_results_array;
    }
}

function return_top_five_results_array_overall ($top_five_results_array_overall,$top_five_results_array_local)
{
    $result = count($top_five_results_array_overall)>4 ? $top_five_results_array_overall : array_merge($top_five_results_array_overall,$top_five_results_array_local);
    
    echo '<pre style="padding:0px 8px;white-space:pre-wrap;background-color:yellow;">';
    echo '<b>top_five_results_array_overall so far:</b> <br><br>';
    var_dump($result);
    echo '</pre>';

    return $result;
}

//top five results array, local and overall
$top_five_results_array_local = [];
$top_five_results_array_overall = [];

//triple columns functions
//full_name and mail and username
$full_name_and_mail_and_username = new query('full_name',$con, $q,'mail','username');
$top_five_results_array_local = $full_name_and_mail_and_username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

//double columns functions
//full_name and mail
$full_name_and_mail = new query('full_name',$con, $q,'mail');
$top_five_results_array_local = $full_name_and_mail->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

//full_name and username
$full_name_and_username = new query('full_name',$con, $q,'username');
$top_five_results_array_local = $full_name_and_username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

//mail and username
$mail_and_username = new query('mail',$con, $q,'username');
$top_five_results_array_local = $mail_and_username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

//single columns functions
//full_name
$full_name = new query('full_name',$con, $q);
$top_five_results_array_local = $full_name->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

//mail
$mail = new query('mail',$con, $q);
$top_five_results_array_local = $mail->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);
//username
$username = new query('username',$con, $q);
$top_five_results_array_local = $username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);
//region
$username = new query('region',$con, $q);
$top_five_results_array_local = $username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);
//department
$username = new query('department',$con, $q);
$top_five_results_array_local = $username->query_results()->output_text()->query_results_to_array()->return_top_five_results_array_local();
$top_five_results_array_overall = return_top_five_results_array_overall($top_five_results_array_overall,$top_five_results_array_local);

echo json_encode($top_five_results_array_overall);