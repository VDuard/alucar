<?php
session_start();
include_once '../php/config/config.php';

$usuario_func = $usuario_cli = $carro = $horario = $data_devolucao = $data_locacao = "";
$usuario_func_err = $usuario_cli_err = $carro_err = $horario_err = $data_devolucao_err = $data_locacao_err = "";
$motorista;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

//    $input_usuario_func = trim($_POST["usuario_func"]);
//    if (empty($input_usuario_func)){
//        $usuario_func_err = '?';
//    } else {
//        $usuario_func = $input_usuario_func;
//    }
//
//    $input_usuario_cli = trim($_POST["usuario_cli"]);
//    if (empty($input_usuario_cli)){
//        $usuario_cli_err = '??';
//    } else {
//        $usuario_cli = $input_usuario_cli;
//    }
//
    $input_data_locacao = trim($_POST["data_locacao"]);
    if (empty($input_data_locacao)){
        $data_locacao_err = '???';
    } else {
        $data_locacao = $input_data_locacao;
    }

    $input_data_devolucao = trim($_POST["data_devolucao"]);
    if (empty($input_data_devolucao)){
        $data_devolucao_err = '???';
    } else {
        $data_devolucao = $input_data_devolucao;
    }

    //$input_motorista = trim($_POST["motorista"]);
    $sql = "SELECT * FROM carro WHERE idCarro = 1";
    if ($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            while ($row = $result->fetch_array()) {
    
                $statusCarro = $row['statusDoCarro'];
                    
            }   
        }
    }
    


    if (empty($usuario_func_err) && empty($usuario_cli_err) && empty($carro_err) && empty($horario_err) && empty($data_devolucao_err)){
        $sql = "INSERT INTO aluguel (usuario_idCliente, carro_idCarro, horario, dataDevolucao) VALUES (?, ? ,? ,?)";

        if ($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ssss", $param_usu_cli, $param_carro, $param_horario, $param_data_devolucao);

            $param_usu_cli = $_SESSION['idUsuario'];
            $param_carro = 1;
            $param_horario = $data_locacao;
            $param_data_devolucao = $data_devolucao;
            if($statusCarro == "Disponivel"){
                $sql = "UPDATE carro SET VALUES statusDoCarro = 'Alugado' WHERE idCarro = 1 ";


                if ($stmt->execute()){
                    $_SESSION['carroAlugadoId']=$param_carro;
                    
    
                    header("location: selecionarMotorista.php");
                    exit();
                } else {
                    echo "<script language='JavaScript' type='text/javascript'>
                                alert('Algo deu errado. Por favor, tente novamente mais tarde.');
                                window.location.href='cadastro.php';
                          </script>";
                    die();
                }
    
            }else{
                echo "<script language='JavaScript' type='text/javascript'>
                            alert('Esse Carro ja esta locado.');
                            window.location.href='cadastro.php';
                      </script>";
                die();
            }
            /*
            if ($stmt->execute()){
                $_SESSION['carroAlugadoId']=$param_carro;


                header("location: selecionarMotorista.php");
                exit();
            } else {
                echo "<script language='JavaScript' type='text/javascript'>
                            alert('Algo deu errado. Por favor, tente novamente mais tarde.');
                            window.location.href='cadastro.php';
                      </script>";
                die();
            }*/
        }

        $stmt->close();
    }

    $mysqli->close();
}
$usuario_nome = $_SESSION['usarioNome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CARRO GOL</title>

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
    <div class="jumbotron">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <img src="../img/carros/carrolarge.jpg" class="img-fluid" alt="Responsive image">

                </div>
                <div class="col-md-8">
                    <h1>Gol</h1>
                    <p>Conectado Como Nenhum Outro. Acesse e Conheça o Novo Gol. Inovação e Tecnologia.</p>
                    <p><h1>4.6  </h1></p>
                    <p>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <h6>Periodo de Locacao</h6>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><h6>Inicio da locação</h6></label>
                            <input type="text" class="form-control" id="inputLocacao" aria-describedby="locacaoHelp" placeholder="Ex.: 2018/06/20" name="data_locacao">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"><h6>Final da locação</h6></label>
                            <input type="text" class="form-control" id="inputDevolucao" aria-describedby="devolucaoHelp" placeholder="Ex.: 2018/09/26" name="data_devolucao">
                        </div>


                        <input type="submit" class="btn btn-dark" style="background-color:#ff6600;" value="Alugar!">
                        <a href="../index.php" class="btn btn-dark" style="background-color: red;">Cancel</a>
                    </form>

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