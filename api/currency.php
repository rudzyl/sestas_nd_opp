<?php
$dist = 0;
define('TIME', 15); //kesinimo laikas sekundem
define('API', 'https://api.exchangeratesapi.io/latest');
// vienkartinis scenarijus pradedant veikima
//
 if(!file_exists(__DIR__.'/data.json')) {
   file_put_contents(__DIR__.'/data.json',
    json_encode([
      'time' => time()-TIME-1, //is dabartinio laiko atimama -1s, nebevalidus laikas
      'data'=>(object)[] 
      ])
      ); 
 }
 $cache = json_decode(file_get_contents(__DIR__.'/data.json'));
 //skaitymas is API
 if($cache->time < time()-TIME) {

  $type = 'API';
  $curl=curl_init();
  curl_setopt($curl, CURLOPT_URL, API); //is kur ka paimti
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

  $ats = curl_exec($curl); //siunciam uzklausa, laukiame...atsakyma irasome i ats
// isspausdinamas stringas
  curl_close($curl); //uzdarymas, visada atliekamas

  $ats = json_decode($ats);
  file_put_contents(__DIR__.'/data.json',
    json_encode([
      'time' => time()-TIME-1, //is dabartinio laiko atimama -1s, nebevalidus laikas
      'data'=>$ats
      ])
  ); 

 }
//skaitymas is cache
else {
  $type = 'CACHE';
  $ats = $cache->data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1 style= "color:red">Result from : <?= $type ?></h1>
<h2>CAD: <?= $ats->rate->CAD ?></h2>
</body>
</html>