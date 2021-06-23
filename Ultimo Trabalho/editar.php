<?php 
require('banco.php');
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetch();

if (!$user) {
    echo "<script>
    alert('Você não tem permissão para acessar');
    window.location.href = 'login.php';
    </script>";
}

?>

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
                <div class="d-flex">
                    <a href="sair.php" class=" btn btn-danger">Sair</a>
                </div>              
            </div>
        </div>
    </nav>

    <div class="row d-flex justify-content-center pt-3">
      <div class="card text-center">       
        <div class="card-body">
          <div class="row d-flex justify-content-center">
            <div class="col-md-4">
              <form method="POST" action="editarInfosUsuario.php">
              <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="nome" class="form-control" id="nome" name="nome" value="<?=$user['nome'];?>">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Login</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?=$user['email'];?>">
                </div>
                <div class="mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" value="<?=$user['senha'];?>">
                </div>
                <div class="mb-3">                  
                  <input type="hidden" class="form-control" id="id" name="id" value="<?=$id;?>">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?= require('footer.php'); ?>