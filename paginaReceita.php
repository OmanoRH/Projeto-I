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

    <?php require("barra-de-navegacao.php"); ?>

    <!-- Conexão com o Banco -->
    <?php

      require("conexao.php");

      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = $pdo->prepare("SELECT * FROM bolo WHERE id_bolo = ?");
        $sql->execute([$id]);
        $dadosB = $sql->fetchAll();

        $sql = $pdo->prepare("SELECT * FROM ingredientes WHERE id_ingredientes = ?");
        $sql->execute([$id]);
        $dadosI = $sql->fetchAll();

        $sql = $pdo->prepare("SELECT * FROM preparo WHERE id_preparo = ?");
        $sql->execute([$id]);
        $dadosP = $sql->fetchAll();
      }

    ?>


    <div class="container">
      <div class="row">
        <div class="col-5">
          <div class="bolo mt-5">
            <!-- Imagem da Receita -->
            <?php
              foreach ($dadosB as $row) {
                // Tenta decodificar com diferentes tipos de imagem até sucesso
                $imageTypes = ['jpeg', 'png', 'jpg', 'webp']; // Tipos de imagem
                foreach ($imageTypes as $type) {
                  $decoded = base64_decode($row['img_bolo'], true);
                  if ($decoded !== false) {
                    $imgData = $decoded;
                    break;
                  }
                }
                echo '<img class="img-bolo" src="data:image/jpeg;base64,' . base64_encode($imgData) . '" alt="Bolo de Cenoura">';
              }
            ?>
            <!-- Título da Receita -->
            <?php
              foreach ($dadosB as $value) {

                $valueData = explode("-", $value['data_criacao']);
                $valueDataF = $valueData[2]."/".$valueData[1]."/".$valueData[0];

                echo  "<h1>Nome: $value[nome_bolo]</h1> <h2>Criador: $value[nome_criador]</h2> <h2>Data: $valueDataF</h2>";
              }
            ?>
          </div>
        </div>


        <div class="col-7 mt-5">


          <!-- Cards -->
          <div class="cards">
            <div class="cartaz">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Igredientes da Massa</h2>
                  <p class="card-text">
                    <?php
                      foreach ($dadosI as $valueMassa) {
                        echo  "<ul class='list'>
                                      <li>$valueMassa[ingredientes_massa]</li>
                                    </ul>";
                      }
                    ?>
                  </p>
                </div>
              </div>
            </div>


            <div class="cartaz">
              <div class="card mt-3">
                <div class="card-body">
                  <h2 class="card-title">Igredientes da Calda</h2>
                  <p class="card-text">
                    <?php
                      foreach ($dadosI as $valueCalda) {
                        echo  "<ul class='list'>
                                    <li>$valueCalda[ingredientes_calda]</li>
                                  </ul>";
                      }
                    ?>
                  </p>
                </div>
              </div>
            </div>



            <div class="cartaz">
              <div class="card mt-3">
                <div class="card-body">
                  <h2 class="card-title">Modo de Preparo da Massa</h2>
                  <p class="card-text">
                    <?php
                      foreach ($dadosP as $valuePM) {
                        echo  "<ul class='list'>
                                      <li>$valuePM[preparo_massa]</li>
                                    </ul>";
                      }
                    ?>
                  </p>
                </div>
              </div>
            </div>



            <div class="cartaz">
              <div class="card mt-3">
                <div class="card-body">
                  <h2 class="card-title">Modo de Preparo da Calda</h2>
                  <p class="card-text">
                    <?php
                      foreach ($dadosP as $valuePC) {
                        echo  "<ul class='list'>
                                      <li>$valuePC[preparo_calda]</li>
                                    </ul>";
                      }
                    ?>
                  </p>
                </div>
              </div>
            </div>


            <!-- FInalização -->
            <div class="cartaz">
              <div class="card mt-3">
                <div class="card-body">
                  <h2 class="card-title">Finalização</h2>
                  <p class="card-text"><ul><li><?php foreach($dadosP as $valuePF){echo"$valuePF[preparo_final]";} ?></li></ul></p>
                </div>
              </div>
            </div>
          </div>
        </div>
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