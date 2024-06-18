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


      $sql = $pdo -> prepare("SELECT id_bolo, img_bolo, nome_bolo FROM bolo");
      $sql->execute();
      $dadosB = $sql->fetchAll();

    ?>


    <!-- introdução do site -->
    <div class="container">
      <div class="row">
        <h1 class="mt-3">Bem-vindo ao Boleiro Receitas!</h1>
        <p>Explore uma variedade de receitas deliciosas e descubra segredos culinários para criar bolos incríveis. <br> De
          clássicos reconfortantes a sobremesas inspiradoras, mergulhe em nossa comunidade e compartilhe o amor pelos
          bolos. <br> Venha fazer parte dessa jornada de sabor e criatividade!</p>
      </div>
    </div>


    <!-- carrossel -->
    <div class="container">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

        <a href="paginaReceita.php">

          <div class="carousel-item active mt-3">
            <img src="Imagens/bolo-de-cenoura-de-liquidificador-1.jpeg" style="height: 700px;" class="d-block w-100"
              alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bolo de Cenoura</h5>
              <p>Com sua cobertura de chocolate irresistível e seu interior macio e úmido, ela é uma receita que conquista
                o coração de todos!.</p>
            </div>
          </div>

          </a>

          <a href="paginaReceita.php">

            <div class="carousel-item mt-3">
              <img src="Imagens/bolo-de-cenoura-de-liquidificador-1.jpeg" style="height: 700px;" class="d-block w-100"
                alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bolo de Cenoura</h5>
                <p>Com sua cobertura de chocolate irresistível e seu interior macio e úmido, ela é uma receita que conquista
                  o coração de todos!.</p>
              </div>
            </div>
          </a>

          <div class="carousel-item">
            <img id="bolo" src="Imagens/bolo-de-cenoura-de-liquidificador-1.jpeg" style="height: 700px;"
              class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bolo de Cenoura</h5>
              <p>Com sua cobertura de chocolate irresistível e seu interior macio e úmido, ela é uma receita que conquista
                o coração de todos!.</p>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- fim do carrossel -->


    <!-- cards -->
    <div class="container"> 
      <div class="row">
        <h2 class="mt-3">Confira nossas outras receitas:</h2>

        <?php

        foreach($dadosB as $value){

          $imageTypes = ['jpeg', 'png', 'jpg', 'webp']; // Tipos de imagem para teste

          foreach ($imageTypes as $type) {
          $decoded = base64_decode($value['img_bolo'], true);
          if ($decoded !== false) {
              $imgData = $decoded;
              break;
            }
          }

          echo'
              <div class="cartaz col-4">
                <div class="card mt-3">
                  <img class="img-bolodecenoura" src="data:image/jpeg;base64,' . base64_encode($imgData) . '" alt="bolo de cenoura">
                  <div class="card-body">
                    <h5 class="card-title">'.$value['nome_bolo'].'</h5>
                    <a href="paginaReceita.php?id='.$value['id_bolo'].'" class="btn btn-primary"> Ver Receita Completa </a>
                  </div>
                </div>
              </div>
          ';
        }
      
      
      ?>

      </div>
    </div>
    <!-- fim dos cards -->


      <!-- Rodapé do Site  -->
       <?php 
        require ("rodape.php");
       ?>
  

    <!-- Linkagem do JS -->
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/script.js"></script>
  </body> 
</html>