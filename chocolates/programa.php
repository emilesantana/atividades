<?php
$cholatebranco = 0;
$chocolateescuro = 0;
$contagen = 0;
$promoe = 0;
$promob = 0;

$chocolateescuro = $_POST["chocolateescuro"];
$chocolatebranco = $_POST["chocolatebranco"];

$contagen = 3;
while($contagen <= $chocolateescuro){
	$promob = $promob + 1;
	$contagen = $contagen + 3;
}
$contagen = 2; 
while($contagen <= $chocolatebranco){
	$promoe = $promoe + 1;
	$contagen = $contagen + 2;
}
$contagen = 5;
while($contagen <= $chocolatebranco + $chocolateescuro){
	$promob = $promob + 1;
	$contagen = $contagen + 5;
}

echo "vc ganho esta quantidade de chocolates escuros: " . ($promob + $chocolatebranco); 
echo "<br/>";
echo "vc ganho esta quantidade de chocolates brancos:" . ($promoe + $chocolateescuro); 



?>
