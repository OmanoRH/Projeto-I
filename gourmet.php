<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- TItulo -->
    <title>Boleiros Receitas/Bolos Gourmet</title>


    <!-- Linkagem do CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
  </head>

  <body>

    <!-- Barra de Navegação -->
    <?php

      require("barra-de-navegacao.php");
      require("conexao.php");


      $sql = $pdo -> prepare("SELECT id_bolo, img_bolo, nome_bolo FROM bolo WHERE tipo_bolo = 'Bolo Gourmet'");
      $sql->execute();
      $dadosB = $sql->fetchAll();
    ?>


    <!-- Interface -->
    <div class="container">
      <div class="row">


        <!-- Titulo da Pagina -->
        <h2 class="mt-3 mb-3">
          Bolos Gourmet
        </h2>


        <!-- Texto de introdução -->
        <p class="parag mb-3">Bolos Gourmet são bolos que levam maior tempo, técnica e ingredientes de maior qualidade para seu preparo <br> altamente recomendado para aniversários e comemorações</p>


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

    <!-- Rodapé do Site -->
    <?php
      require("rodape.php");
    ?>


    <!-- Linkagem do JS -->
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/script.js"></script>
  </body>
</html>