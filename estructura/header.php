<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">Something is Cooking</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="create.php">Crear</a>
          </li>
          
        </ul>
        <form class="d-flex" action="buscador.php" method="post">
          <input class="form-control me-2" type="text" name="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success sombreado" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>