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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Página Principal</title>
    </head>
    <body>
        <form method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Código" aria-label="Código" type="number" name="codigo" id="codigo">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" type="text" name="nome" id="nome">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Endereco" aria-label="Endereco" type="text" name="endereco" id="endereco">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone" type="text" name="telefone" id="telefone">
                </div>
            </div>

            <button type="submit">Cadastrar
            <?php
                $conexao  = new Conexao();//Conectando o banco
    
                //Pegar os dados do formulário
                $codigo   = $_POST['codigo'];
                $nome     = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                //Chamar a classe inserir
                $inserir = new Inserir();
                    
            ?>
            </button>  
        </form><!-- Fim do formulário -->

       



        <?php
            echo $inserir->cadastrarPessoa($conexao,$codigo,$nome,$endereco,$telefone);
        ?>
        <br><br>
        <a href="index.php"><button>Voltar</button><br><br>
    </body>
</html>