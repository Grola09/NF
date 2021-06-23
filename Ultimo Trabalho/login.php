<?php require('header.php'); ?>
<body>
  <section class="container">
    <div class="row d-flex justify-content-center">
      <div class="card text-center pt-5">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <div class="row d-flex justify-content-center">
            <div class="col-md-4">
              <form method="POST" action="autenticacao.php">
                <div class="mb-3">
                  <label for="email" class="form-label">Login</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?= require('footer.php'); ?>