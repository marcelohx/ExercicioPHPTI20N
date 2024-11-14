<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <title>Página Atualizar</title>
    </head>
    <body>
        <form method="POST">
            <label>Código: </label>
            <input type="number" name="codigo" id="codigo"/><br><br>

            <select name="atualizacao">
                <option value="nome">Nome</option>
                <option value="endereco">Endereço</option>
                <option value="telefone">Telefone</option>
                <option value="cargo">Cargo</option>
                <option value="salario">Salario</option>
            </select><br><br>

            <label>Novo Dado: </label>
            <input type="text" name="novoDado" id="novoDado"/><br><br>

            <button type="submit"> Atualizar
                <?php
                $conexao = new Conexao();
                $atualizar = new Atualizar();
                $codigo = $_POST['codigo'];
                $campo = $_POST['atualizacao'];
                $novoDado = $_POST['novoDado'];                
                ?>
            </button>
        </form>
        <?php
            echo $atualizar->atualizarFuncionario($conexao,$campo,$novoDado,$codigo);
        ?>
        <br><br>
        <a href="index.php"><button>Voltar</button><br><br>
    </body>
</html>