<?php
namespace HTMLPHP\PHP;

use HTMLPHP\PHP\Conexao;
require_once("Conexao.php");

class Excluir{
    public function deletar(Conexao $con, string $nomeTabela, int $cod){
        try{
            $con = $con->conectar();
            $sql = "delete from $nomeTabela where codigo = '$cod'";
            $resultado = mysqli_query($con,$sql);
            if($resultado){
                return "Excluído com sucesso!";
            }
            return "Erro na exclusão do banco de dados";
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>