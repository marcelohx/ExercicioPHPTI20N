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
        <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/><br><br>

        <button type="submit">Excluir
            <?php
                $conexao = new Conexao();
                $codigo = $_POST['codigo'];
                $excluir = new Excluir();
                
            ?>
        </button>
        </form>
        <?php
            $excluir->excluirItem($conexao, $codigo);
        ?>
        <br><br>
        <a href="index.php"><button>Voltar</button><br><br>
    </body>
</html>