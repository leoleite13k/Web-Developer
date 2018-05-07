<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            setlocale(LC_TIME, "pt_BR");
            $agora = getdate();
            //criar elementos
            $ano = $agora["year"];
            $mes = strftime('%B');
            $dia = $agora["mday"];
        
            $hora = $agora["hours"];
            $minutos = $agora["minutes"];
            $segundo = $agora["seconds"];
        
            if ($segundo < 10) {
                $segundo = "0" + $segundo;
            }

            echo $dia . " de " . $mes . " de " . $ano . " - " . $hora . ":" . $minutos . ":" . $segundo;
        ?>

    </body>
</html>