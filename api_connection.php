<?php

$curl = curl_init();
$search_string = $_POST['Search'];
//$search_string = 'beans';

$apiURL = 'https://api.edamam.com/search?app_id=cfca78b9&app_key=79da0322fff417e5a405406191c0b605&q=' . $search_string . '&to=30';

//echo '<br/><br/>';
//var_dump($apiURL);
//echo '<hr/>';

curl_setopt($curl, CURLOPT_URL, $apiURL);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


$result = curl_exec ($curl); 
//var_dump($result);
//echo '<br/><br/>';

?>