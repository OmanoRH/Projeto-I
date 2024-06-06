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


  <!-- TItulo -->
  <title>Boleiros Receitas/Bolo de Cenoura</title>
</head>

<body>

  <!-- Barra de Navegação -->
  <?php

    require("barra-de-navegacao.php");
    
  ?>

  <!-- Imagem da recdeita -->
  <div class="container">
    <div class="banner">
      <img class="img-bolodecenoura" src="Imagens/bolo-de-cenoura-de-liquidificador-1.jpeg" alt="bolo de cenoura">

      <!-- título principal -->
      <div class="title">
        <h1>Bolo de cenoura</h1>
      </div>

        <!-- card da receita massa -->
      <div id="c1" class="card">
        <h2>Igredientes da massa</h2>
        <ul class="list">
          <li>3 cenouras médias (cerca de 360 gramas) descascadas e cortadas em rodelas</li>
          <li>4 ovos</li>
          <li>1 xícara de chá de óleo de milho (240 ml)</li>
          <li>1 e 1/2 de chá de açúcar</li>
          <li>2 xícara de chá de farinha de trigo (280 gramas)</li>
          <li>1 colher de sopa de fermenro químico em pó (fermento para bolo) (14 gramas)</li>
          <li>1 pitada de sal (1/4 de colher de chá)</li>
          <li>Manteiga e farinha de trigo para untar</li>
        </ul>
      </div>

        <!-- card da receita calda -->
      <div id="c2" class="card">
        <h2>Igredientes da calda</h2>
        <ul class="list">
          <li>1 caixa de leite condensado (395 gramas)</li>
          <li>1 colher de sopa de manteiga sem sal (14 gramas)</li>
          <li>4 colheres de sopa de chocolate em pó (ou 7 colheres de sopa de achocolatado)</li>
          <li>1/2 caixinha de creme de leite (100 gramas)</li>
        </ul>
      </div>

        <!-- card duplo do modo de preparo e finalização -->
      <div id="c3" class="card">
        <h2>Modo de preparo da massa</h2>
        <ul>
          <li>Reúna todos os ingredientes da massa do seu bolo de cenoura de liquidificador.</li>
          <li>Em um recipiente, peneire a farinha (para deixar seu bolo mais leve, sem grumihos) e misture com o sal e
            fermento. Reserve;</li>
          <li>No liquidificador, coloque as cenouras, o óleo, os ovos e o açúcar. Bata por cerca de 5 minutos e despeje
            a mistura em um recipiente grande</li>
          <li>Gradualmente, vá adicionando a mistura de ingredientes secos e, com o auxílio de um fouet, vá misturando
            até tudo incorporar.</li>
          <li>Assim que ficar homogêneo, transfira para uma forma, untada e enfarinha, e leve ao forno preaquecido a
            180ºC por cerca de 45 a 50 minutos.</li>
        </ul>
          <!-- fim do modo de preparo -->

        <br><br><br>

          <!-- começo da finalização -->
        <h2>Modo de preparo da calda e finalização</h2>
        <ul>
          <li>Reúna todos os ingredientes da cobertura.</li>
          <li>Em uma panela, coloque todos os ingredientes (menos o creme de leite) e misture bem.</li>
          <li>Leve ao fogo médio e mexa sem parar até atingir o ponto de brigadeiro (quando começa a desgrudar do fundo
            da panela). Depois, é só desligar o fogo, juntar o creme de leite e misturar até incorporar.</li>
          <li>Assim que o bolo mornar, desenforme e despeje a cobertura por cima;</li>
          <li>Agora é só decorar (se quiser) e servir. Bom apetite!</li>
        </ul>
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