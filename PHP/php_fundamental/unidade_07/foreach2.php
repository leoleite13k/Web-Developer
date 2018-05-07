<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = array ("nome" => "Jose",
                             "sobrenome" => "Silva",
                             "salario" => 1000,
                             "aniversario" => "03/08/1994"
                            );
        
        foreach ($agenda as $atributo => $valor) {
            echo $atributo . ": " . $valor . "<br>";
        }
        ?>

    </body>
</html>