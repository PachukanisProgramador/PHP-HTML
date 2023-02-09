<?php
namespace HTMLPHP\PHP;

use HTMLPHP\PHP\Conexao;
require_once("Conexao.php");

class Inserir{
    public function cadastrar(Conexao $con, string $nomeTabela, string $nome, string $telefone){
        try{

            $con = $con->conectar();
            $sql = "insert into $nomeTabela (codigo,nome,telefone) values ('','$nome','$telefone') ";
            $resultado = mysqli_query($con, $sql);
            if($resultado){
                return "Inserido com sucesso!";
            }
            return "Erro na inserção do banco de dados";
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
    <title>Inserir</title>
</head>
<body>
    <form method="POST">
        <label for="lNome">Nome: </label><input type="text" name='tNome' placeholder='Insira o nome'>
        <label for="lTelefone">Telefone: </label><input type="number" name='tTelefone' placeholder='Insira o telefone'>
        <button name='inserirBotao'>Inserir</button>
        <?php
        try{
            if($_POST['tNome'] != "" && $_POST['tTelefone'] != ""){
                $con = new Conexao();
                $cad = new Inserir();
                echo $cad->cadastrar($con,"pessoa",$_POST['tNome'],$_POST['tTelefone']);
                return;
            }
            echo "Erro de cadastro";
        }catch(Except $erro){
            echo $erro;
        }
        ?>
    </form>
    <a href="Consultar.php"><button>Consultar</button></a>
    <a href="Atualizar.php"><button>Atualizar</button></a>
    <a href="Excluir.php"><button>Excluir</button></a>
</body>
</html>