<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Linkagem do CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="Css/bootstrap.min.css">


  <!-- Linkagem do Icones no Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>

  <!-- Barra de Navegação -->
  <?php

    require("conexao.php");
    require("barra-de-navegacao.php");

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

  <!-- Imagem da recdeita -->
  <div class="container">
    <div class="banner">
      
      <?php
        foreach($dadosB as $valueImg){
          echo '<img class="img-bolodecenoura" src="get_image.php?id=' . $valueImg['img_bolo'] . '" alt="bolo de cenoura">';
        }
      ?>

      <!-- título principal -->
      <div class="title">
        <?php
          foreach($dadosB as $value){
            echo  "<h1>$value[nome_bolo]</h1>";
          }
        ?>
        
      </div>

        <!-- card da receita massa -->
      <div id="c1" class="card">
        <h2>Igredientes da massa</h2>

        <?php
        
          foreach($dadosI as $valueMassa){
            echo  "<ul class='list'>
                      <li>$valueMassa[ingredientes_massa]</li>
                    </ul>";
          }
        
        ?>
        
      </div>

        <!-- card da receita calda -->
      <div id="c2" class="card">
        <h2>Igredientes da calda</h2>
          <?php

            foreach($dadosI as $valueCalda){
              echo  "<ul class='list'>
                        <li>$valueCalda[ingredientes_calda]</li>
                      </ul>";
            }
          
          ?>
      </div>

        <!-- card duplo do modo de preparo e finalização -->
      <div id="c3" class="card">
        <h2>Modo de preparo da massa</h2>
          <?php

            foreach($dadosP as $valuePM){
              echo  "<ul class='list'>
                        <li>$valuePM[preparo_massa]</li>
                      </ul>";

          }
      
      ?>
        </ul>
          <!-- fim do modo de preparo -->

        <br><br><br>

          <!-- começo da finalização -->
        <h2>Modo de preparo da calda e finalização</h2>
        <?php
        
          foreach($dadosP as $valuePC){
            echo  "<ul class='list'>
                      <li>$valuePC[preparo_calda]</li>
                    </ul>";
          }
        
        ?>
      </div>
    </div>
  </div>









  <!-- Linkagem do JS -->
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
</body>


  <!-- Rodapé do Site -->
  <?php

    require("rodape.php")

  ?>



</html>