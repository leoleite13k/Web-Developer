<?php
    //ou $_nome = "Maria ";
    $_nome = "Maria";
    $_sobrenome = "Silva";
    $_nomeCompleto = $_nome . " " . $_sobrenome;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //echo $_nome . " " . $_sobrenome;
            echo $_nomeCompleto;
        ?>
    </body>
</html>