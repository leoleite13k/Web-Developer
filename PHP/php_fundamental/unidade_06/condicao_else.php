<?php
    $a = 5;
    $b = 5;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            if ($a > $b) {
                echo "A é amior do que B" . "<br>";
            }
            else if($a < $b) {
                echo "B é maior do que A" . "<br>";
            }
            else {
                echo "A é igual a B";
            }
        ?>

    </body>
</html>