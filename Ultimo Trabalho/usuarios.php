<?php
session_start();
require('banco.php');
$nome = $_SESSION['nome'];
$id = $_SESSION['id'];
 require('header.php'); 
if (!$id) {
    echo "<script>
    alert('Você não tem permissão para entrar nessa área');
    window.location.href = 'login.php';
    </script>";
}
$stmt = $conn->query("SELECT * FROM usuarios");

?>

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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-success m-2" href="cadastrar.php">Incluir</a>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = $stmt->fetch()) { ?>
                                        <tr>
                                            <th scope="row"><?= $row['id']; ?></th>
                                            <td><?= $row['nome']; ?></td>
                                            <td><?= $row['email']; ?></td>
                                            <td><a href="editar.php?id=<?=$row['id'];?>" class="btn btn-primary">Editar</a>
                                            <a href="removerUsuario.php?id=<?=$row['id'];?>" class="btn btn-danger">Excluir</a></td>
                                        </tr>
                                        <?php } ?>          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require('footer.php'); ?>