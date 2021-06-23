<?php require('header.php'); ?>
<body>
  <section class="container">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="painel.php">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="usuarios.php">Cadastro de Usuários</a>
                    </li>                   
                </ul>            
            </div>
        </div>
    </nav>

    <div class="row d-flex justify-content-center pt-3">
      <div class="card text-center">       
        <div class="card-body">
          <div class="row d-flex justify-content-center">
            <div class="col-md-4">
              <form method="POST" action="inserirUsuario.php">
              <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="nome" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Login</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?= require('footer.php'); ?>