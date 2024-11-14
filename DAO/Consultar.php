<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarPessoa(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>Código: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'];
                        return;//Encerra o processo
                    }
                    echo "Código digitado não é válido!";
                }
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//Fim do metodo

        function consultarItem(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from item where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>Código: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Marca: ".$dados['marca'].
                             "<br>Modelo: ".$dados['modelo'].
                             "<br>Quantidade: ".$dados['quantidade'];
                        return;//Encerra o processo
                    }
                    echo "Código digitado não é válido!";
                }
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//Fim do metodo

        function consultarFuncionario(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from funcionario where codigo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>Código: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'].
                             "<br>Cargo: ".$dados['cargo'].
                             "<br>Salário: ".$dados['salario'];
                        return;//Encerra o processo
                    }
                    echo "Código digitado não é válido!";
                }
            }catch(Exception $erro)
            {
                echo $erro;
            }
        }//Fim do metodo
    }//Fim da classe
?>