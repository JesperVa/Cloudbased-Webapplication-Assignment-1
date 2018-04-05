<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$header = "Accept: application/json";

$res = $client->request('GET', 'http://unicorns.idioti.se/',  [$header]);

echo $res->getBody();

/*
if($res->hasHeader('Name')){
    echo "it exists";
}

foreach($res->getHeaders() as $name => $values){
    echo $name . ': ' . implode(', ', $values) . "\r\n";
} 
*/
?>