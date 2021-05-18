<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display Each Key Value of JSON Object in PHP</title>
    <style>
      .numbers span {
        padding: 0.9em 0;
      	text-align: center;
    	font-weight: 900;
    	margin-left: 0.5em;
       
      }
    </style>
</head>
<body>

<p class="numbers">
<?php

// Read JSON file
$json = file_get_contents('./list.json');

//Decode JSON
$json_data = json_decode($json,true);



// Order by published
usort($json_data, function ($a, $b) {
    return $a['published_at'] <=> $b['published_at'];
});
$result = array_reverse($json_data);

//Print data
foreach($result as $elem)  {
	
   echo("<span>".$elem['published_at']."</span>"." - ".$elem['title'] );
   echo("<br/>");
    
}

?>
</p>
</body>
</html>