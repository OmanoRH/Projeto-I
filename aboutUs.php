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
    ?>

    <div class="container">
      <div class="row">
          <h1 class="mt-3"> Sobre Nós </h1>
          <p>Somos uma </p>
      </div>
    </div>
      
      <!-- Linkagem do JS -->
      <script src="JS/bootstrap.bundle.min.js"></script>
      <script src="JS/script.js"></script>
  </body> 

  <footer class="footer mt-auto py-3">
    <!-- Rodapé do Site  -->
    <div class="container">
      <div class="row">
        <?php 
          require ("rodape.php");
        ?>
      </div>
    </div>
  </footer>
</html>