<?php
namespace HTMLPHP\HTML;
use HTMLPHP\PHP\Excluir;
require_once("../PHP/Excluir.php");
use HTMLPHP\PHP\Conexao;
require_once("../PHP/Conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form method='POST'>
        <label for="lCodigo"></label><input name='tCodigo' type="number"/>
        <button name='codigoBotao'>Excluir</button>
        <?php
        if($_POST['tCodigo'] > 0){
            $conexao = new Conexao();
            $exclusao = new Excluir();
            echo $exclusao->deletar($conexao,"pessoa",$_POST['tCodigo']);
            return;
        }
        echo "Informe um código válido";
        ?>
    </form>
    <a href="Consultar.php"><button>Consultar</button></a>
    <a href="Inserir.php"><button>Inserir</button></a>
    <a href="Atualizar.php"><button>Atualizar</button></a>
</body>
</html>