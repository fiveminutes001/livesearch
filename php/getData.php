<?php
//echo 'q from livesearch.php: '.$q;


// class queryResults
// {
// 	// property declaration
//     public $content;
//     public $green_link;
//     public $red_link;
//     public $current_link;

//     $sql="SELECT username FROM playground_demo_all_data WHERE full_name LIKE '%".$q."%' LIMIT 5";
//     $result = mysqli_query($con,$sql);
//     $full_name_results_array = [];
			
// 	// method declaration
// 	// none
	
// 	public function __construct($first_page = null, $word_index_start = 0, $word_index_end = 10)
// 	{
// 			$this->content = '
			
// 			<div id="my_nanogallery2"></div>
// 			<script>
			
// 			  jQuery("#my_nanogallery2").nanogallery2({
// 				items:[
// 				  {
// 					src:          \'https://vimeo.com/32875422\',                           // media url
// 					srct:         \'https://i.vimeocdn.com/video/222726041_1280x720.jpg\',  // media thumbnail url
// 					title:        \'Vimeo video\',                                          // media title
// 					description:  \'Video\'                                                 // media description
// 				  },
// 				  { src: \'https://www.youtube.com/watch?v=Ir098VWCv8Q\', title: \'Youtube video\' },
// 				  { src: \'https://www.dailymotion.com/video/x4wtyl6\',   title: \'Dailymotion video\' },
// 				  { src: \'berlin1.jpg\',      srct: \'berlin1t.jpg\',   title: \'Title Image\' }
// 					],
// 				thumbnailWidth:  \'auto\',
// 				thumbnailHeight: 170,
// 				itemsBaseURL:    \'https://nanogallery2.nanostudio.org/samples/\',
// 					locationHash:    false
// 			  });
			
// 			</script>
// 			';	
// 	}
	
// 	// method declaration
//     public function displayContent() 
// 	{
//         echo $this->content;
//     }
// }

// functions
//query results to array
function query_results_to_array($arr, $result,$column){
    while($row = mysqli_fetch_array($result)) {
        array_push($arr,$row[$column]);
    }
    
    if(count($arr)){
        foreach($arr as $key => $value)
        {
            echo $value."<br>";
        }
    } else {
        echo 'No results found';
    }
}

//output text
function output_text($sql,$result,$column){
    echo '<pre style="padding:0px 8px;white-space:pre-wrap;">';
    echo '<b>Query:</b> <br><br>'.$sql.'<br><br>';
    echo '<b>Status:</b> <br><br>found '.$result->num_rows.' results in '.$column.' field.<br><br>';
    echo '<b>Results:</b> <br><br>';
}

//full_name

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

//mail


//username
$column = 'username';
$sql="SELECT ".$column." FROM playground_demo_all_data WHERE username LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];

//debugging
//var_dump($result);
//var_dump($con);

output_text($sql,$result,$column);
query_results_to_array($results_array[$column],$result,$column);

echo '</pre>';

//username
$column = 'full_name';
$sql="SELECT ".$column." FROM playground_demo_all_data WHERE username LIKE '%".$q."%' LIMIT 5";
$result = mysqli_query($con,$sql);
$results_array[$column] = [];

//debugging
//var_dump($result);
//var_dump($con);

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