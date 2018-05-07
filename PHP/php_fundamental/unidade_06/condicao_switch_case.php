<?php
    $dia = "quinta";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            switch($dia){
                case "segunda":
                    echo "Hoje ainda é segunda ;(" . "<br>";
                        break;
                case "quarta":
                    echo "Hoje não é sexta, mas ta perto" . "<br>";
                    break;
                case "sexta":
                    echo "Obaaa \o/ chegou o grande dia!" . "<br>";
                    break;
                default:
                    echo"Trabalha ai que esta chegando";
            }
        ?>
        
    </body>
</html>