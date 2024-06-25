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
          <h3 class="mt-5">Quem somos nós ?</h3>
          <h5 class="mt-2">
            Somos uma equipe de Desenvolvedores Iniciantes <br>
            Nossa equipe é formada de 3 integrantes, são eles: <br> <br>       
          </h5>
          <div class="col-lg-4 mb-4">
          <div class="card">
            <img src="https://github.com/StuartMorais.png" class="card-img-top" alt="Stuart Morais">
            <div class="card-body">
              <h5 class="card-title">Stuart Morais</h5>
              <p class="card-text">Banco de Dados/Back-End</p>
              <a href="https://github.com/StuartMorais" class="btn btn-primary" target="_blank">Perfil do GitHub</a>
            </div>
          </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="https://github.com/OmanoRH.png" class="card-img-top" alt="OmanoRH">
              <div class="card-body">
                <h5 class="card-title">Renato Hilquias</h5>
                <p class="card-text">Front-End</p>
                <a href="https://github.com/OmanoRH" class="btn btn-primary" target="_blank">Perfil do GitHub</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="https://github.com/HarumiMori.png" class="card-img-top" alt="Harumi Mori">
              <div class="card-body">
                <h5 class="card-title">Harumi Mori</h5>
                <p class="card-text">Back-End</p>
                <a href="https://github.com/HarumiMori" class="btn btn-primary" target="_blank">Perfil do GitHub</a>
              </div>
            </div>
          </div>
          <h3>
            Nós trabalhamos nesse site em que você está navegando agora <br>
            Utilizamos em nosso desenvolvimento as linguagens: HTML5, CSS3, JavaScript, PHP, MySQL e AJAX<br>
            Nossa equipe foi formada no desenvolvimento de um projeto integrador no curso Programador Web do Senac 2024<br>
          </h3>
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