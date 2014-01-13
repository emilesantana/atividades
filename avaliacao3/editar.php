<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo "sandalha não encomtrada";
    }
    else{
        $id = $_REQUEST["id"];
        $numero = $_REQUEST["numero"];
        $tipo = $_REQUEST["tipo"];
             
    
        
        $aceito = false;
        if(isset($_REQUEST["aceito"])){
            $aceito = true;
    }
        
        $sandalhas = array();
        $sandalhas = array();
        $sandalhas["tipo"] = $tipo;
        $sandalhas["numero"] = $numero;
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $sandalhas;
        
         echo "edição feita com susseso!";
    }

?>
