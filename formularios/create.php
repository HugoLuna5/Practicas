<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Mis practicas</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="./css/custom.css" />
  </head>
  <body>
    <header class="mb-5">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark pl-5 pr-5">
        <a class="navbar-brand" href="#">Formularios</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto"></ul>
          <ul class="navbar-nav pr-5">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./create.php">Crear producto</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="customMargins">
      <div class="row d-flex">
        <div class="col-md-4 offset-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Crear producto</h3>
            </div>
            <div class="card-body">
              <form action="./scripts/save.php" method="POST" class="p-2">
                <div class="form-group">
                  <label for="name">Nombre del producto</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    placeholder="Escribe el nombre del producto"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="price">Precio del producto</label>
                  <input
                    type="text"
                    name="price"
                    id="price"
                    class="form-control"
                    placeholder="Escribe el precio del producto"
                    required
                  />
                </div>

                <div class="form-group">
                  <label for="stock">Número de unidades</label>
                  <input
                    type="number"
                    name="stock"
                    id="stock"
                    class="form-control"
                    placeholder="Escribe el número de unidades del producto"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea
                    style="resize: none"
                    placeholder="Escribe la descripción del producto"
                    name="description"
                    id="description"
                    class="form-control"
                  ></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-success btn-block">Agregar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
