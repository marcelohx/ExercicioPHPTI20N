<?php
    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn=mysqli_connect('localhost','root','','exercicioPHPTI20N');
                if($conn){
                    echo "Conectado";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return "Algo deu errado <br><br>".$erro;
            }
        }//Fim do metodo 
    }//Fim da classe
?>