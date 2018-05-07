<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: R$: " . $salario * $meses ."<br>";
            echo "Quinzena : R$: " . $salario / 2 ."<br>";
        
            // Exponencial
            echo "Exponencial: " . pow(6,3) . "<br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "<br>";

            // Randômico Generica
            echo "Randomico: " . rand() . "<br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo: " . rand(1,10) . "<br>";

            // Valor absoluto
            echo "Absoluto: " . abs(10);
           //Positivo e inteiro
            
        ?>
    </body>
</html>