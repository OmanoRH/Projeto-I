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
</head>

<body>

  <!-- Barra de Navegação -->
  <?php

    require("barra-de-navegacao.php");
    
  ?>


  <!-- Interface -->
  <div class="container">
    <div class="row">


      <!-- Imagem de Downloud para simular o botão de carregar imagem -->
      <img id="download" src="Imagens/Group 6.png" alt="simbulo de download">


      <!-- Começo do Formulario de Cadastro do Bolos -->
      <form action="" method="POST" novalidate>


        <!-- Seleção do Tipo de Bolo que será cadastrado -->
        <div class="form-floating mb-3">
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            <option selected>Selecione o tipo de Bolo da sua Receita</option>
            <option name="gourmet" value="1">Bolo Gourmet</option>
            <option name="vulcao" value="2">Bolo Vulcão</option>
            <option name="caseiro" value="3">Bolo Caseiro</option>
          </select>
          <label for="floatingSelect">Tipo de Bolo</label>
        </div>
        


        <!-- Cadastro do Nome do Bolo -->
        <label for="NomeDoBolo">Nome do Bolo:</label>
        <input name="NomeDoBolo" class="form-control" required  type="text" placeholder="Coloque aqui o nome do seu Bolo" aria-label="default input example">

        <div class="mb-3 mt-5">
          <label for="exampleFormControlTextarea1" class="form-label">Faça uma lista dos Igredientes
            necessários:</label>
          <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      
        <div class="mb-3 mt-5">
          <label for="exampleFormControlTextarea1" class="form-label">Faça uma lista dos Igredientes
            necessários:</label>
          <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      
      
        <div class="mb-3 mt-5">
          <label for="exampleFormControlTextarea1" class="form-label">Descreva o Modo de Preparo do Bolo Usando os
            Ingredientes:</label>
          <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        <div class="mb-3 mt-5">
          <label for="exampleFormControlTextarea1" class="form-label">Descreva o Modo de Preparo do Bolo Usando os
            Ingredientes:</label>
          <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      
      
        <div class="mb-3 mt-5">
          <input required onclick="" type="submit" value="Enviar">
        </div>

      </form>
      <!-- FIm do Formulario de Cadastro de Bolos -->


    </div>
  </div>



  

  <!-- Linkagem do -->
  <script src="JS/bootstrap.bundle.min.js"></script>
  <script src="JS/script.js"></script>
</body>


  <!-- Rodapé do Site -->
  <?php

    require("rodape.php")

  ?>



</html>