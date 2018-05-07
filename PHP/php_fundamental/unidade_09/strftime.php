<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
           //Determinartimezone
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt_BR");
            $agora = getdate();
        
            //criar elementos
            $ano = strftime('%Y');
            $mes = strftime('%B');
            $dia = strftime('%d');
            $diaSemana = strftime('%A');
        
            $hora = strftime('%H');
            $minutos = strftime('%M');
            $segundo = strftime('%S');
        
            if ($segundo < 10) {
                $segundo = "0" + $segundo;
            }

            echo $diaSemana . ", " . $dia . " de " . $mes . " de " . $ano . " - " . $hora . ":" . $minutos . ":" . $segundo;
        ?>

    </body>
</html>