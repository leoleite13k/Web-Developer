<?php
    //Passo 1 - Abrir conexao
    /*$conecta = mysqli_connect("localhost","root","","andes");*/
    //ou
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "andes";
    
    $conecta = mysqli_connect($servidor,$usuario,$senha ,$banco);  

    //Passo 2 - Testar Conexão somente para vc
    if (mysqli_connect_errno()) {
        die("Conexão Falhou " . mysqli_connect_errno() );
    }
    
?>

<?php
    //Passo 3 - Abrir consulta ao banco de dados
    $consulta_categorias  = "SELECT nomeproduto,tempoentrega";
    $consulta_categorias .= " FROM produtos " ;
    //$consulta_categorias .= " WHERE categoriaID  ";
    $categorias = mysqli_query($conecta, $consulta_categorias);

    if (!$categorias) {
        die("Falha na consulta ao banco");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            while ($registro = mysqli_fetch_assoc($categorias)) {
        ?>        
                
                print_r($registro);
                echo "<br>";
          
        }
        ?>
    </body>
</html>

<?php
    mysqli_close($conecta);
?>
