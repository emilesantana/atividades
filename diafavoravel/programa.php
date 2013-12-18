<?php
$tInicio = 0;
$tFim = 0;
$tAtual = 0;
$txInicio = 0;
$txFim = 0;

$txInicio = $_POST["inicio"];
$txFim = $_POST["fim"];

$txInicio = explode("/", $txInicio);
$txFim = explode("/",$txFim);

$tInicio = mktime (0, 0, 0, $txInicio[1],            $txInicio[0], $txInicio[2]);
$tFim = mktime (0, 0, 0, $txFim[1], $txFim[0], $txFim[2]);

$tAtual = time();

echo "hoje é um dia bom para compras? ";

if ($tAtual >= $tInicio and $tAtual <= $tFim){
	echo "sim <br/><br/>";
}
else{
 	echo "hoje não";
}
?>
