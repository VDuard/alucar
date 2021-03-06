<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alucar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/logo.ico">

    <link rel="stylesheet" href="css/alugar.css">

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
                <a class="nav-link" href="alugar.php"> Alugar <span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href="areaGerenciamentoFuncionario.php">Area de Gerenciamento</a>
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
<!-- selecionar carro -->
<div class ="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-8">
                        <h2>
                            Aluguel de veiculos
                        </h2>
                        <p>
                            Trazendo os melhores carros pra você!
                        </p>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top" src="../img/carros/carro1card.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Nome do carro</h5>
                        <p class="card-text">Proteção parcial contra danos, conforto e motorista!</p>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /selecionar carro -->

<!-- selecionar cliente -->
<div class="container">
    <form>
  <div class="form-group">
    <label for="emailClienteConsulta">Cliente Email</label>
    <input type="email" class="form-control" id="emailClienteConsulta" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="nomeClienteConsulta">Cliente Nome</label>
    <input type="name" class="form-control" id="nomeClienteConsulta" aria-describedby="nomeHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="cpfClienteConsulta">Cliente Cpf</label>
    <input type="number" class="form-control" id="cpfClienteConsulta" aria-describedby="cpfHelp" placeholder="Enter email">
  </div>


  <button type="submit" class="btn btn-primary">Selecionar</button>
</form>
</div>
<!-- /selecionar cliente -->

<!-- finalizar aluguel -->
<div class="container">
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <h1>Dados Para Aluguel</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, expedita amet dolorem a libero soluta quasi quae suscipit possimus, sed quo qui modi esse repudiandae quos magni, labore molestiae accusamus.</p>
                    <p><h1>4.6  </h1></p>
                    <p>
                        <h6>Motorista?</h6>
                        <select class="custom-select">
                          <option value="1">sim</option>
                          <option value="2">não</option>
                        </select>
                        <h6>Selecione seu motorista</h6>
                        <select class="custom-select">
                          <option selected>Motorista 1 (2.5)</option>
                          <option value="1">Motorista 2 (1.5)</option>
                          <option value="2">Motorista 3 (4.5)</option>
                          <option value="3">Motorista 4 (5.0)</option>
                        </select> 
                        <h6>Periodo de Locacao</h6>
                        <select class="custom-select">
                          <option selected>5 dias</option>
                          <option value="1">10 dias</option>
                          <option value="2">15 dias</option>
                          <option value="3">outro</option>
                        </select> 
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1"><h6>Quantidade de dias</h6></label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex.: 60">
                            <small id="emailHelp" class="form-text text-muted">Use esse campo apenas se voce selecionou outro.</small>
                          </div>
                        </form>                       
                       
                        <button type="button " class="btn btn-dark mt-2" style="background-color: #ff6600;">
                            <a href="#" style="color:inherit">alugar</a>
                        </button>

                    </p>
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