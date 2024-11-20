<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Página Excluir</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="">INVENTORY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="index.php" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cadastrar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="CadastrarPessoa.php">Cadastrar Pessoa</a></li>
                                <li><a class="dropdown-item" href="CadastrarItem.php">Cadastrar Item</a></li>
                                <li><a class="dropdown-item" href="CadastrarFuncionario.php">Cadastrar Funcionario</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Consultar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ConsultarPessoa.php">Consultar Pessoa</a></li>
                                <li><a class="dropdown-item" href="ConsultarItem.php">Consultar Item</a></li>
                                <li><a class="dropdown-item" href="ConsultarFuncionario.php">Consultar Funcionario</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Atualizar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="AtualizarPessoa.php">Atualizar Pessoa</a></li>
                                <li><a class="dropdown-item" href="AtualizarItem.php">Atualizar Item</a></li>
                                <li><a class="dropdown-item" href="AtualizarFuncionario.php">Atualizar Funcionario</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Excluir
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="ExcluirPessoa.php">Excluir Pessoa</a></li>
                                <li><a class="dropdown-item" href="ExcluirItem.php">Excluir Item</a></li>
                                <li><a class="dropdown-item" href="ExcluirFuncionario.php">Excluir Funcionario</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
        <form method="POST">
            <div class="row">
                <div class="col">
                    <input class="form-control" placeholder="Código" aria-label="Código" type="number" name="codigo" id="codigo"><br><br>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Excluir
                    <?php
                    if(isset($_POST['codigo'])){
                            $conexao = new Conexao();
                            $codigo = $_POST['codigo'];
                            $excluir = new Excluir();
                            $excluir->excluirItem($conexao, $codigo);  
                        }else{
                            $_POST['codigo'] = 0;
                        } 
                    ?>
                </button>
            </div>
        </form>
    </body>
</html>