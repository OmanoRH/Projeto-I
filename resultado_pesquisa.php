<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- TItulo -->
        <title>Boleiros Receitas</title>


        <!-- Linkagem do CSS -->
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    </head>

    <body>

        <!-- Barra de Navegação -->
        <?php
        require("barra-de-navegacao.php");

        require("conexao.php");


        $sql = $pdo->prepare("SELECT id_bolo, img_bolo, nome_bolo FROM bolo");
        $sql->execute();
        $dadosB = $sql->fetchAll();
        ?>


        <!-- Linkagem do JS -->
        <script src="JS/bootstrap.bundle.min.js"></script>
        <script src="JS/script.js"></script>
    </body>
    
    <footer>
        <?php
            require("rodape.php");
        ?>
    </footer>
</html>