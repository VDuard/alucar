
<?php
session_start();
include_once '../php/config/config.php';

$idUsuario = $_SESSION['idUsuario'];
$sql = "SELECT * FROM usuario";
if ($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        while ($row = $result->fetch_array()) { 
            if($row['idUsuario'] == $idUsuario){
                $usuario_logado_hierarquia = $row['hierarquia_idhierarquia'];
            }
        }   
    }
}
if($usuario_logado_hierarquia == 4){
    header("location: areaGerenciamentoCliente.php");
}

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
    <!-- /NavBar -->

<!-- novos dados -->
<div class="container-fluid mt-5">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4">
                    <img src="../img/perfil/gerente.jpg" class="img-fluid" alt="Responsive image">

                </div>
                <div class="col-md-8">
                    <h2>
                    <?php
                            echo $usuario_nome;
                ?>
                    </h2>
                    <p>
                        Edição de dados do Gerente!

                    </p>
                        <form>
                            <p><button type="submit" class="btn btn-dark" style="background-color: #ff6600">
                                <a href="cadastroVeiculos.php" style="color:inherit"> Cadastrar Veículos </a>
                            </button></p>
                            <p><button type="submit" class="btn btn-dark" style="background-color: #ff6600">
                                <a href="cadastrarFuncionario.php" style="color:inherit"> Cadastrar Funcionário </a>
                            </button></p>
                            <p><button type="submit" class="btn btn-dark" style="background-color: #ff6600">
                                <a href="ordemServico.php" style="color:inherit"> Ordem de Serviços </a>
                            </button></p>
                            <p><button type="submit" class="btn btn-dark" style="background-color: #ff6600">
                                <a href="finalizarAluguel.php" style="color:inherit"> Finalizar Aluguel </a>
                            </button></p>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /novos dados -->

<!-- mostrar todos dados -->
<div class="container-fluid mt-5">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <h2>
                    <?php
                            echo $usuario_nome;
                ?>
                    </h2>
                    <p>
                        Edição de dados do usuários!

                    </p>
                    <form>

                          <div class="form-group">
                            <label for="novoNome">Nome de Usuario</label>
                            <input type="name" class="form-control" id="novoNome" aria-describedby="nomeHelp" placeholder="Insira novo Nome de Usuário">
                          </div>
                          <div class="form-group">
                            <label for="novoEmail">Novo Email</label>
                            <input type="email" class="form-control" id="novoEmail" aria-describedby="emailHelp" placeholder="Insira email">
                          </div>
                          <div class="form-group">
                            <label for="novaSenha">Nova Senha</label>
                            <input type="password" class="form-control" id="novaSenha" placeholder="Senha">
                          </div>
                          <button type="submit" class="btn btn-dark" style="background-color: #ff6600">Alterar Dados</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- /mostrar todos os dados -->


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