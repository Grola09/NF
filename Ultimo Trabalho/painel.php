<?php
session_start();
$nome = $_SESSION['nome'];
$id = $_SESSION['id'];
 require('header.php'); 
if (!$id) {
    echo "<script>
    alert('Você não tem permissão para entrar nessa área');
    window.location.href = 'login.php';
    </script>";
}
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
                        <p>Olá, <?= $nome ?> !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require('footer.php'); ?>