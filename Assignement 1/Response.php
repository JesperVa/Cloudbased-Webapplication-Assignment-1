<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$client = new \GuzzleHttp\Client();
$header = ['headers' => ['Accept' => 'application/json']];
$id = $_GET['id'];

$log = new Logger('Assignment 1');
$log->pushHandler(new StreamHandler('Info.log', Logger::INFO));

$res = $client->request('GET', 'http://unicorns.idioti.se/' .$id, $header);
$data = json_decode($res->getBody());

$log->info('Requested: '. $data->{'name'});
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