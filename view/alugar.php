<?php
session_start();
include_once '../php/config/config.php';

$usuario_nome = $_SESSION['usarioNome'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alucar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/logo.ico">

    <link rel="stylesheet" href="../css/alugar.css">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>


<!-- NavBar -->
<div class = "container">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navBar" style="background-color: #ff6600;">
        <a class="navbar-brand" href="indexLogado.php"><img src="../img/logo.png" alt="logoNav" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="indexLogado.php">Home</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Alugar <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                </li>

            </ul>
                    <form class="form-inline">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php
                            echo $usuario_nome;
                            ?>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="areaGerenciamentoGerente.php">Area de Gerenciamento</a>
                            <a class="dropdown-item" href="aluguelAtual.php">Meus Alugueis</a>
                          </div>
                        </div>
                        <button class="btn btn-dark my-2 my-sm-0" type="submit">
                            <a href="../index.php" style="color:inherit"> Sair </a>
                        </button>
                    </form>
        </div>
    </nav>
</div>
    <!-- /NavBar -->


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2>
                    Alucar
                </h2>
                <p>
                    Trazendo os melhores carros pra você!
                </p>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar Carros" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail First" src="../img/carros/carro1.jpg" />
                        <div class="card-block">
                            <h5 class="card-title">
                                Gol | Volkswagen
                            </h5>

                            <p class="card-text">
                                Proteção parcial contra danos, conforto e motorista!
                            </p>
                            <h6>Preço por dia.</h6>
                            <h5 class="card-title">
                                R$ 75,50
                            </h5>
                            <p>
                                <a class="btn btn-outline-light" style="background-color:#ff6600;" href="realizarAluguel.php">Alugar!</a> 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail Second" src="../img/carros/carro2.jpg" />
                        <div class="card-block">
                            <h5 class="card-title">
                                Sonic | Chevrolet 
                            </h5>
                            <p class="card-text">
                                Proteção parcial contra danos.
                            </p>
                            <h6>Preço por dia.</h6>
                            <h5 class="card-title">
                                R$ 69,90
                            </h5>

                            <p>
                                <a class="btn btn-outline-light" style="background-color:#ff6600;"href="#">Alugar!</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" alt="Bootstrap Thumbnail Third" src="../img/carros/carro3.jpg" />
                        <div class="card-block">
                            <h5 class="card-title">
                                Celta | Chevrolet 
                            </h5>
                            <p class="card-text">
                                Proteção parcial contra danos.
                            </p>
                            <h6>Preço por dia.</h6>
                            <h5 class="card-title">
                                R$ 50,50
                            </h5>

                            <p>
                                <a class="btn btn-outline-light" style="background-color:#ff6600;" href="#">Alugar!</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>



<!-- rodapé -->
<section id="rodape">

    <div class="container" align="center">
        <h3>Baixe o APP do Alucar.</h3>

        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fab fa-google-play fa-2x"></i></a>
        <a href="#"><i class="fab fa-app-store fa-2x"></i></a>


    </div>

</section>
<!-- /rodapé -->




<!-- Scripts -->

    <!-- jQuery -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- bootStrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
</html>