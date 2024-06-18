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

          <!-- Lista de Categorias -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tipos de Bolos
            </a>
            <ul class="dropdown-menu" style="background-color: white;">
              <li><a class="dropdown-item" href="gourmet.php">Bolos Gourmet</a></li>
              <li><a class="dropdown-item" href="vulcao.php">Bolos Vulcão</a></li>
              <li><a class="dropdown-item" href="caseiro.php">Bolos Caseiros</a></li>
            </ul>
          </li>
        </ul>


        <!-- Barra de Pesquisa -->
        <div class="barraPesquisa">
          
          <form" class="d-flex" role="search">

            <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search" style="background-color: white;">

            <!-- Botão de Busca -->
            <?php echo'<a class="btn btn-outline-success" href="paginaReceita.php?id='.$nomeBolo.'type="submit">Buscar</a>'; ?>
          </form>


          <!-- Botão de Cadastro de Bolos -->
          <form>
            <a href="cadastro.php"><button class="btn btn-outline-success" type="button">Cadastre seu Bolo</button></a>
          </form>
        </div>
        

        <!-- <div id="cadastro">
          
        </div> -->
        
      </div>
  </nav>
  <!-- FIm da Barra de Navegação -->