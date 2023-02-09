<?php
namespace HTMLPHP\PHP;

class Conexao{
    public function Conectar(){
        try{
            $conn = mysqli_connect('localhost','root','','HTMLPHP');
            if($conn){
                echo "\nConectado com sucesso!";
                return $conn;
            }
            echo "Erro de conexão.";
        }catch(Except $erro){
            echo $erro;
        }
    }
}
?>