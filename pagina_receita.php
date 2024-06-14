<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TItulo -->
        <title>Receita</title>


        <!-- Linkagem do CSS -->
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">


        <!-- Linkagem do Icones no Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <body>

        <!-- Barra de Navegação -->
         <?php require("barra-de-navegacao.php") ?>
    
    
         <!-- Conexão com o Banco de Dados -->
          <?php 

            require("conexao.php");

            $sql = $pdo -> prepare("SELECT * FROM bolo WHERE id_bolo = 11");
            $sql->execute();
            $dadosB = $sql->fetchAll();
        
            $sql = $pdo -> prepare("SELECT * FROM ingredientes WHERE id_ingredientes = 1");
            $sql->execute();
            $dadosI = $sql->fetchAll();
        
            $sql = $pdo -> prepare("SELECT * FROM preparo WHERE id_preparo = 1");
            $sql->execute();
            $dadosP = $sql->fetchAll();

          ?>
    
        <div class="container">
            <div class="">

                <img id="fotoBolo" src="Imagens/bolo-de-cenoura-de-liquidificador-1.jpeg">

                <h1 class="mt-3">Bolo de cenoura</h1>

            </div>
        </div>



        <!-- Rodapé -->
         <?php require("rodape.php") ?>

    </body>

</html>