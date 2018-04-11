<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$header = ['headers' => ['Accept' => 'application/json']];
$id = $_GET['id'];

$res = $client->request('GET', 'http://unicorns.idioti.se/' .$id, $header);
?>

<html>
<body>

<h1>Thank you</h1>

<br>Your name is: <?php echo $res->getBody(); ?> </br>


</body>
</html>