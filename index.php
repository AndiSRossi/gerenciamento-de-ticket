<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Início</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top menu mb-3">
    <div class="container">
      <a class="navbar-brand text-white d-flex align-items-center" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-anthropic"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M9.218 2h2.402L16 12.987h-2.402zM4.379 2h2.512l4.38 10.987H8.82l-.895-2.308h-4.58l-.896 2.307H0L4.38 2.001zm2.755 6.64L5.635 4.777 4.137 8.64z" />
        </svg>
        <span class="p-1">System</span>
      </a>

      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal"
        aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="configDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-gear"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="configDropdown">

              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#" onclick="event.preventDefault()">Alterar Tema</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"
                      onclick="event.preventDefault(); setTemaIndex('claro')">Claro</a>
                  </li>
                  <li><a class="dropdown-item" href="#"
                      onclick="event.preventDefault(); setTemaIndex('escuro')">Escuro</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="flex-fill d-flex justify-content-center align-items-center">
    <div class="container mt-5">
      <div class="principal shadow mb-2 mt-5 p-4 white-bg rounded">
        <section id="inicio" class="intro main-bg section text-white">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h2>Bem-vindo ao Sistema de Gerenciamento <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                  fill="currentColor" class="bi bi-anthropic" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M9.218 2h2.402L16 12.987h-2.402zM4.379 2h2.512l4.38 10.987H8.82l-.895-2.308h-4.58l-.896 2.307H0L4.38 2.001zm2.755 6.64L5.635 4.777 4.137 8.64z" />
                </svg></h2>
            </div>
            <div class="col-md-6 text-center">
              <form action="valida_login.php" method="post" class="p-4 bg-light rounded shadow-sm">
                <p class="text-dark text-center">
                  Usuário e senha:
                  <span class="badge bg-danger">admin</span>
                </p>
                <div class="mb-3">
                  <label for="login" class="form-label text-dark">Usuário</label>
                  <input type="text" id="login" name="login" class="form-control" placeholder="Informe seu usuário"
                    required autofocus>
                </div>

                <div class="mb-3">
                  <label for="senha" class="form-label text-dark">Senha</label>
                  <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha"
                    required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                  <i class="bi bi-box-arrow-in-right"></i> Logar
                </button>
              </form>

              <?php if (isset($_GET['erro'])): ?>
                <div class="alert alert-danger text-center">
                  Usuário ou senha inválidos.
                </div>
              <?php endif; ?>

            </div>

          </div>
        </section>

      </div>
    </div>
  </main>

  <?php include_once "includes/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/script/set-tema.js" defer></script>

</body>

</html>