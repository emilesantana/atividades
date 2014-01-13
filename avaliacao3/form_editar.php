<html>
    <head>
        <title>compra de livros</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>digite o codigo da sandalha  para editar</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>digite o novo numero da sandalha</label>
            <br/>
             <?php require_once ("campos_pessoa.php"); ?>
            <input type="submit" value="editar" />
            
        </form>
    </body>
</html>

<?php
    require_once("menu.php");

    session_start();
    
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $sandalhas){
            if($sandalhas != null){
                echo "[$id] => " . $sandalhas["numero"] . "<br/>";
            }
        }
    }
    else{
        $id = $_REQUEST["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
        
        echo "sandalha  não encontrada";
    }
?>
