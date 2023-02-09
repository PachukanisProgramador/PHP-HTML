<?php
namespace HTMLPHP\PHP;

use HTMLPHP\PHP\Conexao;
require_once("Conexao.php");

class Excluir{
    public function consultarIndividual(Conexao $con, string $nomeTabela, int $cod){
        try{
            $con = $con->conectar();
            $sql = "select * from $nomeTabela";
            $resultado = mysqli_query($con,$sql);
            while($dados = mysqli_fetch_array($resultado)){
                if($dados['codigo'] == $cod){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                    return;//Encerrando a operação
                }
            }
            return "Erro na consulta do banco de dados";
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>