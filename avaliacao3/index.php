<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastro"])){
        $cadastros = $_SESSION["cadastro"];
        
        echo "<dl>";
        foreach($cadastros as $sandalhas){
            $tipo = $sandalhas["tipos"];
            $aceito = $sandalhas["aceito"];
            
            if($sandalhas != null){
                echo "<dt class='$tipo'>" . $sandalhas["nome"] . "<dt/>";
                echo "<dd>tipo: " . $tipo . "<dd/>";
                echo "<dd>categoria: " . $sandalhas["categoria"] . "<br/>";
                echo "<dd>observações: " . $sandalhas["observações"] . "<dd>"; 
                echo "<dd>aceita a compra  ";
                
                if($aceito){
                    echo "sim";
                }
                else{
                    echo "não";
                }
            }
        }
        echo "<dl/>";
    }
     else{
        
        echo "não ha sandalhas cadastrada";
     }    
   
 ?>
