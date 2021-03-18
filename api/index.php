<?php
$dist = 0;
define('API', 'https://www.distance24.org/route.json?stops=');

if(!empty($_GET)) {

// if(!file_exists(__DIR__.'/data.json')) {
//   $empty = ['time' => time(), 'data' => []]
// }



$city1 = $_GET['c1'];
$city2 = $_GET['c2'];



$city1 = 'Pasvalys';
$city2 = 'Vilkaviskis';
// serverio vidus

$curl=curl_init();
  curl_setopt($curl, CURLOPT_URL, API.$city1.'|'.$city2); //is kur ka paimti
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $ats = curl_exec($curl); //siunciam uzklausa, laukiame...atsakyma irasome i ats
// isspausdinamas stringas
  curl_close($curl); //uzdarymas, visada atliekamas

  $ats = json_decode($ats);

    _d($ats);
    _d($ats->stops[0]->wikipedia->image);

    $dist = $ats->distance;
    $image1 = $ats->stops[0]->wikipedia->image ?? '';
    $image2 = $ats->stops[1]->wikipedia->image ?? '';
    $result = 'API';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API DISTANCE-24</title>
</head>
<body>
<form action="" method="get">
Miestas 1 <input type="text" name="c1" >
Miestas 2 <input type="text" name="c2" >
<button type="submit">spausti</button>
</form>
<?php if(null != $dist) : ?>
<h1 style= "color:red">Result from : <?= $result ?></h1>
    <h2>Atstumas: <?= $dist ?> km</h2>
    <img style="width: 400px;" src= "<?= $image1 ?>">
    <img style="width: 400px;" src= "<?= $image2 ?>">
<?php endif ?>
</body>
</html>