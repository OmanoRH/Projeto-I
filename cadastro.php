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
    if($_POST['nomeDoBolo'] == "POST"){
     
      $gourmet = $_POST['gourmet'];
      $vulcao = $_POST['vulcao'];
      $caseiro = $_POST['caseiro'];
      $nomeDoBolo = $_POST['nomeDoBolo'];
      $nomeDoBoleiro = $_POST['nomeDoBoleiro'];
      $imgPreview = $_POST['imgPreview'];
      $igredientesMassa = $_POST['igredientesMassa'];
      $igredientesCalda = $_POST['igredientesMassa'];
      $preparoCalda = $_POST['preparoCalda'];
      $preparoMassa = $_POST['preparoMassa'];

      $date = date('Y-m-d');

      
      if($_POST['selecioneTipoBolo']){
        $erroTipoBolo = "Por Favor, insira um dos tipo de bolo";
      }else {
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

      if($erroTipoBolo == "Nenhum" && $erroGourmet == "Nenhum" && $erroVulcao == "Nenhum" && $erroCaseiro == "Nenhunm" && $erroNome == "Nenhum" &&  $erroIgredientesMassa == "Nenhum" && $erroPreparoMassa == "Nenhum"){
        
        $sql = $pdo -> prepare("INSERT INTO bolo VALUES (null,'$imgPreview', '$nomeDoBolo', '$nomeDoBoleiro','$date', null, null, null);");
        $sql = $pdo -> prepare("INSERT INTO ingredientes VALUES (null, '$igredientesMassa', '$igredientesCalda');");
        $sql = $pdo -> prepare("INSERT INTO preparo VALUES (null, '$preparoMassa', '$preparoCalda');");
        $sql -> execute();
        
        header("");
      }

    }
  ?>
  <!-- Fim do Formulario Back-End de Cadastro do Bolos -->


  <!-- Interface -->
  <div class="container">
    <div class="row">


      <!-- Upload de imagem e preview da imagem -->
      <div id="imgShow">
        <img src="" alt="" id="imgPreview">
        <!-- Utilizando o label com icone como button para o upload da imagem  -->
        <label for="fileInput"><span class="mdi mdi-file-upload" id="icon"></span></label>
                                    <!-- Atributo para que o input fique escondido-->
        <input type="file" id="fileInput" style="visibility: hidden;" name="imgPreview" onchange="previewImage()">
      </div>


      <!-- Começo do Formulario Front-End de Cadastro do Bolos -->
      <form action="" method="POST" novalidate>


        <!-- Seleção do Tipo de Bolo que será cadastrado -->
        <div class="form-floating mt-3 mb-3">
          <select class="form-select <?php if(isset($selecioneTipoBolo)){if($selecioneTipoBolo != "Nenhum"){echo "is-invalid";}} ?> " id="floatingSelect" aria-label="Floating label select example">
            <div class="invalid-feedback">
              <?php
                  if(isset($selecioneTipoBolo)){
                    if($selecioneTipoBolo != "Nenhum"){
                      echo $selecioneTipoBolo;
                    }
                  }                      
              ?>
           </div>
            <option name="selecioneTipoBolo"  selected>Selecione o tipo de Bolo da sua Receita</option>
            <option name="gourmet" value="1">Bolo Gourmet</option>
            <option name="vulcao" value="2">Bolo Vulcão</option>
            <option name="caseiro" value="3">Bolo Caseiro</option>
          </select>
          <label for="floatingSelect">Tipo de Bolo</label>
        </div>
        
        
        <!-- Cadastro Nome do Boleiro -->
        <div class="mb-3 mt-3">
          <label for="nomeDoBoleiro">Nome do Boleiro:</label>
          <input name="nomeDoBoleiro" class="form-control" required  type="text" placeholder="Coloque aqui o nome do Boleiro" aria-label="default input example">
        </div>

        <!-- Cadastro Nome do Bolo -->
        <label for="nomeDoBolo">Nome do Bolo:</label>
        <input name="nomeDoBolo" class="form-control" required  type="text" placeholder="Coloque aqui o nome do Bolo" aria-label="default input example">
        

        <!-- Cadastro Texto Ingredientes da Massa -->
        <div class="mb-3 mt-5">
          <label for="igredientesMassa" class="form-label">Faça uma lista dos Igredientes necessários para a Massa:</label>
          <textarea name="igredientesMassa" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      
        
        <!-- Cadastro Texto Ingredientes da Calda -->
        <div class="mb-3 mt-5">
          <label for="igredientesCalda" class="form-label">Faça uma lista dos Igredientes necessários para a Calda:</label>
          <textarea name="igredientesCalda" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        
        <!-- Cadastro Texto Preparo da Massa -->
        <div class="mb-3 mt-5">
          <label for="preparoMassa" class="form-label">Descreva o Modo de Preparo da Massa:</label>
          <textarea name="preparoMassa" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <!-- Cadastro Texto Preparo da Calda -->
        <div class="mb-3 mt-5">
          <label for="preparoCalda" class="form-label">Descreva o Modo de Preparo da Calda:</label>
          <textarea name="preparoCalda" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <!-- Cadastro Finalização do Bolo -->
        <div class="mb-3 mt-5">
          <label for="finalBolo" class="form-label">Descreva como deve ser Finalizado o Bolo ao Final do Preparo:</label>
          <textarea name="finalBolo" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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