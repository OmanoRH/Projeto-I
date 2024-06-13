<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- TItulo -->
  <title>Boleiros Receitas/Cadastro de Bolo</title>


  <!-- Linkagem do CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>

<body>

  <!-- Barra de Navegação -->
  <?php

    require("barra-de-navegacao.php");
    require("conexao.php")
    
  ?>

  <!-- Começo do Formulario Back-End de Cadastro do Bolos -->
  <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
     
      $tipoBolo = $_POST['tipoBolo'];
      $nomeDoBolo = $_POST['nomeDoBolo'];
      $nomeDoBoleiro = $_POST['nomeDoBoleiro'];
      $igredientesMassa = $_POST['igredientesMassa'];
      $igredientesCalda = $_POST['igredientesMassa'];
      $preparoCalda = $_POST['preparoCalda'];
      $preparoMassa = $_POST['preparoMassa'];
      $finalizacaoBolo = $_POST['finalBolo'];
      $date = date('Y-m-d');


      //Upload da imagem
      $imgPreview = $_FILES['imgPreview']['tmp_name'];//tmp_name é um nome temporario para o arquivo
      $imgPreviewType = $_FILES['imgPreview']['type'];


      $imgData = file_get_contents($imgPreview);// Lê o conteudo da imagem

      $imgBase64 = base64_encode($imgData);//Converte os dados da imagem em base64 encoded string

      


      if(empty($imgPreview)){
        $erroimgPreview = "Por favor, escolha uma imagem";
      } else {
        $erroimgPreview = "Nenhum";
      }


      if (empty($tipoBolo)){
        $erroTipoBolo = "Por Favor, insira um dos tipo de bolo";
      } else {
        $erroTipoBolo = "Nenhum";
      }

      //verificação nome do bolo
      if(empty($nomeDoBolo)){
        $erroNome = "Por Favor, informe o nome do bolo";
      } else {
        if(!preg_match("/^[a-zA-Z-' ]*$/",$nomeDoBolo)) {
          $erroNome = "São apenas permitidos letras de A-Z";
        }
        else{
          $erroNome = "Nenhum";
        }
      }

      //verificação igredientes da Massa
      if(empty($igredientesMassa)){
        $erroIgredientesMassa = "Por favor, descreva os igredientes do seu bolo";
      } else {
        $erroIgredientesMassa = "Nenhum";
      }

      //verificação preparo da Massa
      if(empty($preparoMassa)){
        $erroPreparoMassa = "Por favor, descreva o preparo da massa do seu bolo";
      } else {
        $erroPreparoMassa = "Nenhum";
      }

      if(empty($finalizacaoBolo)){
        $erroFinalBolo = "Por favor, descreva como o bolo deve ser finalizado";
      } else {
        $erroFinalBolo = "Nenhum";
      }


      if($erroTipoBolo == "Nenhum" && $erroNome == "Nenhum" &&  $erroIgredientesMassa == "Nenhum" && $erroPreparoMassa == "Nenhum" && $erroimgPreview == "Nenhum" && $erroFinalBolo == "Nenhum"){
        
        $sql = $pdo -> prepare("INSERT INTO bolo VALUES (null, ?, ?, ?, ?, ?, null, null);");
        $sql -> execute([$imgBase64, $nomeDoBolo, $nomeDoBoleiro, $date, $tipoBolo]);

        $sql = $pdo -> prepare("INSERT INTO ingredientes VALUES (null, ?, ?);");
        $sql -> execute([$igredientesMassa, $igredientesCalda]);

        $sql = $pdo -> prepare("INSERT INTO preparo VALUES (null, ?, ?);");
        $sql -> execute([$preparoMassa, $preparoCalda]);
        
        header("");
      }

    }
  ?>
  <!-- Fim do Formulario Back-End de Cadastro do Bolos -->


  <!-- Interface -->
  <div class="container">
    <div class="row">


      


      <!-- Começo do Formulario Front-End de Cadastro do Bolos -->
      <form action="" method="POST" novalidate enctype="multipart/form-data">

        <!-- Upload de imagem e preview da imagem -->
        <div id="imgShow">
          <img src="" alt="" id="imgPreview">
          <!-- Utilizando o label com icone como button para o upload da imagem  -->
          <label for="fileInput"><span class="mdi mdi-file-upload <?php if(isset($erroimgPreview)){if($erroimgPreview != "Nenhum"){echo "is-invalid";}} ?> " id="icon"></span></label>
                                      <!-- Atributo para que o input fique escondido-->
          <input type="file" id="fileInput" style="visibility: hidden;" name="imgPreview" onchange="previewImage()">
          <div class="invalid-feedback">
            <?php
              if(isset($erroimgPreview)){
                if($erroimgPreview != "Nenhum"){
                  echo $erroimgPreview; //Código com erro
                }
              }                      
            ?>
          </div> 

        </div>

        <!-- Seleção do Tipo de Bolo -->
        <div class="form-check mt-3" name="radioSelect">

          <p style="text-align: start;" class="mb-0">Tipo do bolo: </p>

          <input class="form-check-input" type="radio" name="tipoBolo" id="tipoBolo1" value="Bolo Caseiro">
          <label class="form-check-label" for="tipoBolo1"> Bolo Caseiro </label><br>
            
          <input class="form-check-input" type="radio" name="tipoBolo" id="tipoBolo2" value="Bolo Gourmet">
          <label class="form-check-label" for="tipoBolo2"> Bolo Gourmet </label><br>
                
          <input class="form-check-input" type="radio" name="tipoBolo" id="tipoBolo3" value="Bolo Vulcão">
          <label class="form-check-label <?php if(isset($erroTipoBolo)){if($erroTipoBolo != "Nenhum"){echo "is-invalid";}} ?> " for="tipoBolo3"> Bolo Vulcão </label>
          <div class="invalid-feedback">
            <?php
              if(isset($erroTipoBolo)){
                if($erroTipoBolo != "Nenhum"){ //Código com erro
                  echo $erroTipoBolo;
                }
              }                      
            ?>
          </div> 

        </div>

        <!-- Cadastro Nome do Boleiro -->
        <div class="mb-3 mt-3">
          <label for="nomeDoBoleiro">Nome do Boleiro:</label>
          <input name="nomeDoBoleiro" class="form-control " required  type="text" placeholder="Coloque aqui o nome do Boleiro" aria-label="default input example">
        </div>

        <!-- Cadastro Nome do Bolo -->
        <label for="nomeDoBolo">Nome do Bolo:</label>
        <input name="nomeDoBolo" class="form-control <?php if(isset($erroNome)){if($erroNome != "Nenhum"){echo "is-invalid";}} ?>" required  type="text" placeholder="Coloque aqui o nome do Bolo" aria-label="default input example">
        <div class="invalid-feedback">
          <?php
            if(isset($erroNome)){
              if($erroNome != "Nenhum"){
                  echo $erroNome;
                }
              }                      
            ?>
        </div> 
        

        <!-- Cadastro Texto Ingredientes da Massa -->
        <div class="mb-3 mt-5">
          <label for="igredientesMassa" class="form-label">Faça uma lista dos Igredientes necessários para a Massa:</label>
          <textarea name="igredientesMassa" required class="form-control <?php if(isset($erroIgredientesMassa)){if($erroIgredientesMassa != "Nenhum"){echo "is-invalid";}} ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="invalid-feedback">
            <?php
              if(isset($erroIgredientesMassa)){
                if($erroIgredientesMassa != "Nenhum"){
                  echo $erroIgredientesMassa;
                }
              }                      
            ?>
          </div> 
        </div>
      
        
        <!-- Cadastro Texto Ingredientes da Calda -->
        <div class="mb-3 mt-5">
          <label for="igredientesCalda" class="form-label">Faça uma lista dos Igredientes necessários para a Calda:</label>
          <textarea name="igredientesCalda" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        
        <!-- Cadastro Texto Preparo da Massa -->
        <div class="mb-3 mt-5">
          <label for="preparoMassa" class="form-label">Descreva o Modo de Preparo da Massa:</label>
          <textarea name="preparoMassa" required class="form-control <?php if(isset($erroPreparoMassa)){if($erroPreparoMassa != "Nenhum"){echo "is-invalid";}} ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="invalid-feedback">
            <?php
              if(isset($erroPreparoMassa)){
                if($erroPreparoMassa != "Nenhum"){
                  echo $erroPreparoMassa;
                }
              }                      
            ?>
          </div> 
        </div>


        <!-- Cadastro Texto Preparo da Calda -->
        <div class="mb-3 mt-5">
          <label for="preparoCalda" class="form-label">Descreva o Modo de Preparo da Calda:</label>
          <textarea name="preparoCalda" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <!-- Cadastro Finalização do Bolo -->
        <div class="mb-3 mt-5">
          <label for="finalBolo" class="form-label ">Descreva como deve ser Finalizado o Bolo ao Final do Preparo:</label>
          <textarea name="finalBolo" required class="form-control <?php if(isset($erroFinalBolo)){if($erroFinalBolo != "Nenhum"){echo "is-invalid";}} ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="invalid-feedback">
            <?php
              if(isset($erroFinalBolo)){
                if($erroFinalBolo != "Nenhum"){
                  echo $erroFinalBolo;
                }
              }                      
            ?>
          </div> 
        </div>

        <!-- Botão de Enviar -->
        <div class="mb-3 mt-5">
          <input required onclick="" type="submit" value="Enviar">
        </div>

      </form>
      <!-- FIm do Formulario Front-End de Cadastro de Bolos -->


    </div>
  </div>



  

  <!-- Linkagem do Java-->
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
</body>


  <!-- Rodapé do Site -->
  <?php

    require("rodape.php")

  ?>



</html>