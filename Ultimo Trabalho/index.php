<?php require('header.php'); ?>


<body>
    <section class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="painel.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fale Conosco</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="login.php" class=" btn btn-primary text-light">Login</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="row d-flex justify-content-center pt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://png.pngtree.com/png-vector/20191027/ourlarge/pngtree-basketball-ball-vector-sport-game-fitness-symbol-illustration-png-image_1880316.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Bola de Basquete</h5>
                                        <p class="card-text">A bola de basquete é um dos equipamentos básicos para a prática do basquete. Dentre seus principais fabricantes, estão a Molten, Adidas, Nike, Spalding e Wilson.</p>
                                        <a href="#" class="btn btn-primary">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://img1.gratispng.com/20171221/ude/baseball-bat-png-clipart-picture-5a3bf71b773267.0413845415138793234882.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Taco de Baseball</h5>
                                        <p class="card-text">Um taco de beisebol é um equipamento desportivo básico para a prática de beisebol. Existem três tipos de tacos: Os tacos de madeira, os de alumínio e os de fibra de carbono.</p>
                                        <a href="#" class="btn btn-primary">Comprar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://cdn.ecvol.com/s/www.querocase.com.br/produtos/topsocket-bola-de-futebol/z/0.png?v=0" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Bola de Futebol</h5>
                                        <p class="card-text">A bola é um objeto utilizado para lazer de uma pessoa e em diversos desportos. A bola é geralmente esférica, mas pode ter outras formas, como a oblonga ou a quadrada.</p>
                                        <a href="#" class="btn btn-primary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require('footer.php'); ?>