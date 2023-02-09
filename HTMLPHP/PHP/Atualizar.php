<?php

namespace HTMLPHP\PHP\DAO;
require_once("Conexao.php");

use HTMLPHP\PHP\Conexao;

class Atualizar{
    public function update(Conexao $conexao, string $campo, string $novoDado, string $codigo, string $nomeTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "update $nomeTabela set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);

            if($result){
                echo "<br><br>Atualizado com sucesso!";
                return;
            }
            echo "<br><br>Impossível atualizar.";
        }catch(Except $erro){
            echo $erro;
        }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <label for="lCampo"></label><input name='tCampo' type="text">
    <label for="lNovoDado"></label><input name='tNovoDado' type="text">
    <label for="lCodigo"></label><input name='tCodigo' type="text">
    <form action="">
        <?php
        if($_POST['tCampo'] != "" && $_POST['tNovoDado'] != "" && $_POST['tCodigo'] != ""){
            $conexao = new Conexao();
            $atu = new Atualizar();
            echo $atu->update($conexao,$_POST);
        }
        ?>

    </form>
</body>
</html>