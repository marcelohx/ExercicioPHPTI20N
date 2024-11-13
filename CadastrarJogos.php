<?php
    namespace PHP\Modelo;
    require_once('DAO\Inserir.php');
    require_once('DAO\Conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;
?>
 
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"><br><br>
 
            <label>Nome: </label>
            <input type="text" name="nome" id="nome"><br><br>
 
            <label>Estudio: </label>
            <input type="text" name="estudio" id="estudio"><br><br>
 
            <label>Gênero: </label>
            <input type="text" name="genero" id="genero"><br><br>
 
            <button type="submit">Cadastrar
            <?php
                $conexao  = new Conexao();//Conectando o banco
 
                //Pegar os dados do formulário
                $codigo   = $_POST['codigo'];
                $nome     = $_POST['nome'];
                $estudio = $_POST['estudio'];
                $genero = $_POST['genero'];
                //Chamar a classe inserir
                $inserir = new Inserir();
                echo $inserir->cadastrarPessoa($conexao,$codigo,$nome,$estudio,$genero);
            ?>
            </button>    
        </form><!-- Fim do formulário -->
        <br><br>
        <a href="Menu.php"><button>Voltar</button><br><br>
    </body>
</html>