<?php
$url = 'http://api.coindesk.com/v1/bpi/currentprice.json';
$response = file_get_contents($url);
if ($response === FALSE) {
    die('Error Bro');
}

$data = json_decode($response, true);
print_r($data);
?>
<!--
------------------------------------------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta chareset="UFT-8">
    <meta nane="viewport" cotent="width=device-width,intial-scale=1.0">
    <title>Bitcoin perice</title>
</head>
<body>
    <h1>BITCOIN PRICE</h1>
    <p>USD : <?php echo $data ['bpi']['USD']['rate']; ?></p>
    <P>GPB : <?php echo $data ['bpi']['GPB']['rate']; ?></p>
    <p>EUR : <?php echo $data ['bpi']['EUR']['rate']; ?></p>

</body>
</html>