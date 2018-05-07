<?php
    $nome = null;
    $endereco = "Brasil";
    $telefone = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Se a variavel esta configurada? " . isset($nome) ."<br>";
            echo "Se a variavel esta configurada? " . isset($endereco) ."<br>";
            echo "Se a variavel esta configurada? " . isset($telefone) ."<br>";
            //Nem existe a variavel
            echo "Se a variavel esta configurada? " . isset($sep) ."<br>";
        ?>
    </body>
</html>