<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$header = ['headers' => ['Accept' => 'application/json']];
$id = $_GET['id'];

$res = $client->request('GET', 'http://unicorns.idioti.se/' .$id, $header);
$data = json_decode($res->getBody());
?>

<html>
<body>

<h1><?php echo $data->{'name'}; ?></h1>
<div>
    <img src="<?php echo $data->{'image'};?>">
    <h3><?php echo $data->{'spottedWhen'};?></h3>
    <br><?php echo $data->{'description'}; ?></br>
    <br><strong>Found by:</strong> <?php echo $data->{'reportedBy'}; ?></br>
</div>




</body>
</html>