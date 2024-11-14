<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirPessoa(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluido com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel excluir!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo

        function excluirItem(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from item where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluido com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel excluir!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo

        function excluirFuncionario(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from funcionario where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Excluido com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel excluir!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo
    }//Fim do Excluir
?>