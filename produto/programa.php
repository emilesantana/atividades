<?php
$codigo = 0;

$codigo = $_POST["codigo"];

if($codigo == 1){
	echo "caneta 1.20";
}
else if($codigo == 2){
	echo "lapis 0.50";
}
else if($codigo == 3){
	echo "caderno 4.50";
}
else{
	echo "produto não cadastrado";
}
?>
