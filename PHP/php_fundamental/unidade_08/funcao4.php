<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria ($salario,$dias,$cotacao){
                $real = number_format($salario/$dias,2);
                
                $dolar = number_format(($salario/ $dias)/$cotacao,2);
                
                return array($real,$dolar);
            }
        
            list ($resultado_real,$resultado_dolar) = $diaria_array = retornarDiaria(2000,15,2.5);
            echo "Diaria em reais: R$: " . $resultado_real ."<br>";
            echo "Diaria em dolar: $: " . $resultado_dolar ."<br>";
        ?>

    </body>
</html>