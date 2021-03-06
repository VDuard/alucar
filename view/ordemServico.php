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
                <a class="nav-link" href="alugar.php">Alugar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
            </li>
        </ul>
        <form class="form-inline">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pessoa Logada
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
    <!-- /NavBar -->

<!-- ordens ativas -->
<div class="container">
    <ul class="list-group mt-5">
      <li class="list-group-item text-light mt-5" style="background-color: #ff6600">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    Ordem id
                </div>
                <div class="col-md-3">
                    Status Ordem
                </div>
                <div class="col-md-3">
                    Funcionario Responsavel
                </div>
                <div class="col-md-3">
                    Editar Status
                </div>
            </div>
        </div>
    </div>
      </li>
      <li class="list-group-item">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    874578378                
                </div>
                <div class="col-md-3">
                    status da ordem(tratada, em Tratamento, Cancelada)
                </div>
                <div class="col-md-3">
                    funcionario 1
                </div>

                <div class="col-md-3">
                    <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar Status
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Em Tratamento</a>
                        <a class="dropdown-item" href="#">Cancelar</a>
                        <a class="dropdown-item" href="#">Completar</a>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
      </div>
      </li>
      <li class="list-group-item">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    874578378                
                </div>
                <div class="col-md-3">
                    status da ordem(tratada, em Tratamento, Cancelada)
                </div>
                <div class="col-md-3">
                    funcionario 2
                </div>

                <div class="col-md-3">
                    <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar Status
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Em Tratamento</a>
                        <a class="dropdown-item" href="#">Cancelar</a>
                        <a class="dropdown-item" href="#">Completar</a>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
      </div>
      </li>
      <li class="list-group-item">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    874578378                
                </div>
                <div class="col-md-3">
                    status da ordem(tratada, em Tratamento, Cancelada)
                </div>
                <div class="col-md-3">
                    funcionario 3
                </div>

                <div class="col-md-3">
                    <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar Status
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Em Tratamento</a>
                        <a class="dropdown-item" href="#">Cancelar</a>
                        <a class="dropdown-item" href="#">Completar</a>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
      </div>
      </li>
      <li class="list-group-item">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    874578378                
                </div>
                <div class="col-md-3">
                    status da ordem(tratada, em Tratamento, Cancelada)
                </div>
                <div class="col-md-3">
                    funcionario 4
                </div>

                <div class="col-md-3">
                    <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Editar Status
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Em Tratamento</a>
                        <a class="dropdown-item" href="#">Cancelar</a>
                        <a class="dropdown-item" href="#">Completar</a>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
      </div>
      </li>
    </ul>

</div>

<!-- /ordens ativas -->




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