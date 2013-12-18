<?php

 

date_default_timezone_set("Brazil/East");
echo '<meta http-equiv= "refresh" content="1">';
$dataAtual = getdate();

$diaDaSemana = $dataAtual["wday"];
switch ($diaDaSemana){

	case 0:
		echo "domingo";
           break;
	case 1:
		echo "segunda";
		break;
	case 2:
		echo "terça";
		break;
	case 3:
		echo "quarta";
		break;
	case 4:
		echo "quinta";
		break;
	case 5:
   		echo "sexta";
		break; 
 	case 6:
		echo "sabado";
		break;
}

echo ",";


echo $dataAtual["wday"]. "/" . $dataAtual["mon"] . "/" . $dataAtual["year"];
echo " ";
echo $dataAtual["hours"] - 1 . ":" . $dataAtual["minutes"] . ":" . $dataAtual["seconds"];
echo " ";
?>
