<?php
$passagen = 0;
$total = 0;

$passagen = $_POST["passagen"];

if ($passagen <= 4){
 	$total = $passagen * 1.40;
}
else if ($passagen > 4){
 	$total = (passagen - 4) * 2.80;
	$total = $total + 5.60;
}
echo " o valor será :" . number_format($total, 2, ",", ".");


?>
