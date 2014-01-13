<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
       echo "não existe sandalhas para remover";
    }
    else{
        $id = $_REQUEST["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
        
         echo "remoção efetuada com sucesso!";
    }

?>
