<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "sabado";
            if($dia == "sabado" || $dia == "domingo"){
                echo "Dia de descansar";
            }
            else {
                echo "Dia de trabalhar";
            }
        ?>

    </body>
</html>