<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$header = ['headers' => ['Accept' => 'application/json']];
//$id = '1';
//Use inside response.php
//$res = $client->request('GET', 'http://unicorns.idioti.se/' .$id, $header);
$res = $client -> request('GET', 'http://unicorns.idioti.se', $header);

//Make into an array of every ID
$data = json_decode($res->getBody());
//echo $res->getBody();
?>


<!doctype html>
<html>
    <head>
        <title>Example form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Unicorn database</h1>
            <p>Please write in a unicorn ID</p>
            <form action="response.php" method="get">
                <div class="form-group">
                    <label for="id">ID Number: </label>
                    <input type="text" id="id" name="id" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Send info!" class="btn btn-success">
                </div>
            </form>
        </div>
        <div>
        <?php
        foreach($data as $key)
        {
            
            echo $key->{'id'} .'. '; 
            echo $key->{'name'};
            //My god
            echo '<input type="button" class="btn btn-outline-primary" value="Read more" onclick="window.location.href=\'response.php?id='.$key->{'id'}.'\'"/>'; 
            echo '<br />';
        }
        ?>
        </div>

    </body>
</html>

