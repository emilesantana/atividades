<?php
$m1 = 0;
$m2 = 0;
$m3 = 0;
$media = 0;
$previsao = 0;
$mediaconsumo = 0;

$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST{"m3"};

$media = ($m1 + $m2 + $m3) / 3;
echo"sua média da conta é ". $media . "<br/>";

$mediaconsumo = ($media/2.50);
echo"sua médiade consumo é ". $mediaconsumo . "m³ <br/>";

$previsao = ($mediaconsumo * 3.50);
echo"a previsão da sua proxima conta com o aumento da tarifa é de R$ " . $previsao . "<br/>";

echo $previsao;
?>
