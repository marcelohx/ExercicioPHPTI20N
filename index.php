<?php
    namespace PHP\Modelo;
?>
<!Doctype HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
    <title>Menu</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="">INVENTORY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="index.php" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastrar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="CadastrarPessoa.php">Cadastrar Pessoa</a></li>
              <li><a class="dropdown-item" href="CadastrarItem.php">Cadastrar Item</a></li>
              <li><a class="dropdown-item" href="CadastrarFuncionario.php">Cadastrar Funcionario</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consultar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="ConsultarPessoa.php">Consultar Pessoa</a></li>
              <li><a class="dropdown-item" href="ConsultarItem.php">Consultar Item</a></li>
              <li><a class="dropdown-item" href="ConsultarFuncionario.php">Consultar Funcionario</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Atualizar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="AtualizarPessoa.php">Atualizar Pessoa</a></li>
              <li><a class="dropdown-item" href="AtualizarItem.php">Atualizar Item</a></li>
              <li><a class="dropdown-item" href="AtualizarFuncionario.php">Atualizar Funcionario</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <button  class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <br>
  <div class="container" id="imgHead">
    <img src = "imagens/inventory.png" alt="...">
  </div>
  <br>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/Tela.jfif" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>CONTROLE</h5>
          <p>MELHOR CONTROLE E FACILIDADE PARA GERENCIAR SEU ESTOQUE</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/seguranca.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>SEGURANÇA</h5>
          <p>MAIOR SEGURANÇA PARA SEUS DADOS E ACESSOS</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</body>
</html>