<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array("Maça","Abacate","Laranja","Banana","Uva");
            foreach($salada as $fruta) {
                echo $fruta . "<br>";
            }
        ?>

    </body>
</html>