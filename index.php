<?php include "header.php" ?>
<div class="wraper">
 <!-- Banner -->
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="principal">
                        <h1 class="imovel">
                            Seu novo imovel está aqui
                        </h1>
                    </div>
                    <div class="conhecer">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Imoveis -->
    <section class="imoveis">
        <div class="container-fluid">

            <div class="cadastrados">
                <h2>Últimos imóveis cadastrados</h2>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="img/home.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Casas Ibira</h5>
                            <p class="card-text">2.238.000.00</p>
                            <button type="button" class="btn btn-contratar" data-toggle="modal"
                                data-target="#exampleModalScrollable">Contratar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="img/home.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Casas Ibira</h5>
                            <p class="card-text">2.238.000.00</p>
                            <button type="button" class="btn btn-contratar" data-toggle="modal"
                                data-target="#exampleModalScrollable">Contratar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="img/home.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Casas Ibira</h5>
                            <p class="card-text">2.238.000.00</p>
                            <button type="button" class="btn btn-contratar" data-toggle="modal"
                                data-target="#exampleModalScrollable">Contratar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="img/home.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Casas Ibira</h5>
                            <p class="card-text">2.238.000.00</p>
                            <button type="button" class="btn btn-contratar" data-toggle="modal"
                                data-target="#exampleModalScrollable">Contratar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Botão conhecer -->
        <div class="container">
            <div class="center">
                <button class="btn-center">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                    </svg>
                    <span>Conhecer</span>
                </button>
            </div>
        </div>
     <!-- botão cadastrados -->
        <div>
            <h3 class="cadastrados">
                <a class="nav-link" href="lista-imoveis.php"> Quero ver mais modelos</a>

            </h3>
        </div>

    </section>



    <?php include "footer.php" ?>