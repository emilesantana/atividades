<?php
 require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();
    }
    
    $numero = $_REQUEST["numero"];
    $tipo = $_REQUEST["tipo"];
   
    
    $aceito = false;
    if(isset($_REQUEST["aceito"])){
        $aceito = true;
    }
    
    $sandalhas = array();
    $sandalhas["numero"] = $numero;
    $sandalhas["tipo"] = $tipo;
   
    
    
    array_push($_SESSION["cadastros"], $sandalhas);
    
    echo "boa sandalha!";

?>
