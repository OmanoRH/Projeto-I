<!--Começo da Barra de Navegação -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <!-- Logo do Site -->
      <div class="header">
        <a href="index.php"><img class="logo" src="Imagens/Titulo.png" alt="Logo"></a>
      </div>


      <!-- Botões -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Botão de Inicio -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>


          <!-- Lista de Categorias -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tipos de Bolos
            </a>
            <ul class="dropdown-menu" style="background-color: white;">
              <li><a class="dropdown-item" href="gourmet.php">Bolos Gourmet</a></li>
              <li><a class="dropdown-item" href="vulcão.php">Bolos Vulcão</a></li>
              <li><a class="dropdown-item" href="caseiro.php">Bolos Caseiros</a></li>
            </ul>
          </li>
        </ul>


        <!-- Barra de Pesquisa -->
        <div class="barraPesquisa">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: white;">


            <!-- Botão de Busca -->
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>

        <!-- Botão de Cadastro de Bolos -->
        <div id="cadastro">
          <a href="cadastro.php"><button class="btn btn-outline-success" type="button">Cadastre seu Bolo</button></a>
        </div>

      </div>
  </nav>
  <!-- FIm da Barra de Navegação -->