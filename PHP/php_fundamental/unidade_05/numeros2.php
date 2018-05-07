<?php
    $salario = 800;
    $gasolina = 2.7998845;
    $nome = "Leonardo";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um numero? " . is_numeric($salario) . "<br>";
            echo "O $gasolina é um numero? " . is_numeric($gasolina) . "<br>";
            echo "O $nome é um numero? " . is_numeric($nome) . "<br>"; //Não

            // testar se é inteiro
            echo "O $salario é um numero? " . is_int($salario) . "<br>";
            echo "O $gasolina é um numero? " . is_int($gasolina) . "<br>"; //Não

            // testar se é float
            echo "O $salario é um numero? " . is_float($salario) . "<br>"; //Não
            echo "O $gasolina é um numero? " . is_float($gasolina) . "<br>";
        
            //Arendondar
            echo "Gasolina arredondada: " . round($gasolina) . "<br>";
        
            //Aredondar para baixo
            echo "Gasolina arredondada para baixo: " . floor($gasolina) . "<br>";
        
            //Aredonda para cima
            echo "Gasolina arredondada para baixo: " . ceil($gasolina) . "<br>";
            
        ?>
        
        
    </body>
</html>