<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        //Cadastro de Pessoas
        function cadastrarPessoa(Conexao $conexao, int $codigo, string $nome, string $endereco,string $telefone){
            
                $conn = $conexao->conectar();//Abrindo conexao com o banco
                $sql = "Insert into pessoa(codigo, nome, endereco, telefone)
                       values('$codigo','$nome','$endereco','$telefone')";
                $result = mysqli_query($conn, $sql);//Commit no banco
                //Fechar a conexao com o banco
                mysqli_close($conn);
                //Resposta da inserção
                
        }//Fim do metodo

        //Cadastro de Jogos
        function cadastrarItem(Conexao $conexao, int $codigo, string $nome, string $marca,string $modelo, int $quantidade){
            try{
                $conn = $conexao->conectar();//Abrindo conexao com o banco
                $sql = "Insert into item(codigo, nome, marca, modelo, quantidade)
                       values('$codigo','$nome','$marca','$modelo','$quantidade')";
                $result = mysqli_query($conn, $sql);//Commit no banco
                //Fechar a conexao com o banco
                mysqli_close($conn);
                //Resposta da inserção
                if($result){
                    return "<br>Inserido com Sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro)
            {
                return "<br>Algo deu Errado!<br><br>".$erro;
            }//Fim do catch
        }//Fim do metodo

        function cadastrarFuncionario(Conexao $conexao, int $codigo, string $nome, string $endereco,string $telefone, string $cargo, int $salario){
            try{
                $conn = $conexao->conectar();//Abrindo conexao com o banco
                $sql = "Insert into funcionario(codigo, nome, endereco, telefone, cargo, salario)
                       values('$codigo','$nome','$endereco','$telefone','$cargo','$salario')";
                $result = mysqli_query($conn, $sql);//Commit no banco
                //Fechar a conexao com o banco
                mysqli_close($conn);
                //Resposta da inserção
                if($result){
                    return "<br>Inserido com Sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro)
            {
                return "<br>Algo deu Errado!<br><br>".$erro;
            }//Fim do catch
        }//Fim do metodo
    }//Fim da classe
?>