<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <p><?php
                $salada = array("Maça","Abacate","Laranja");
                // se encontrou ou nao 
                //echo "Existe este elemento? " . in_array("Laranja",$salada)
                echo "Posição do elemento? " . array_search("Laranja",$salada)
            ?>
        </p>
        
    </body>
</html>