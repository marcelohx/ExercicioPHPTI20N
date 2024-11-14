<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php'); 
    use PHP\Modelo\DAO\Conexao;

    class Atualizar
    {
        function atualizarPessoa(Conexao $conexao, string $campo, string $novoDado, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "update pessoa set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo

        function atualizarItem(Conexao $conexao, string $campo, string $novoDado, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "update item set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo

        function atualizarFuncionario(Conexao $conexao, string $campo, string $novoDado, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "update funcionario set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar!";
                }
            }
            catch(Exception $erro)
            {
                echo $erro;
            }//Fim do catch
        }//Fim do metodo
    }//Fim do atualizar
?>