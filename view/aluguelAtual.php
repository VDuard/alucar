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
if($usuario_logado_hierarquia == 2){
    header("location: todosAlugueis.php");
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
    <script type = "text/javascript">
        function btnAlert()
        {
            alert("Voce solicitou o cancelamento do alguel, um email será enviado para confirmar seu pedido, favor apresentar o carro na locadora mais proxima");
        }
    </script>
</head>
<body>


<!-- NavBar -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navBar" style="background-color: #ff6600;">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logoNav" height="50px"></a>
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


<!-- carro alugado -->
<div class="container mt-5">
        <div class="row">
        <div class="col-md-12">

            <?php
            include_once '../php/config/config.php';


            $sql = "SELECT a.*, c.modelo FROM aluguel a INNER JOIN carro c ON (a.carro_idCarro = c.idCarro) WHERE usuario_idCliente = '$idUsuario'";

            if ($result = $mysqli->query($sql)){
                if ($result->num_rows > 0){
                    echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>#</th>";
                                echo "<th>Carro</th>";
                                echo "<th>Data da Locação</th>";
                                echo "<th>Data da Devolução</th>";
                                echo "<th>Ações</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $result->fetch_array()) {
                            echo "<tr>";
                                echo "<td>" . $row['idAluguel'] . "</td>";
                                echo "<td>" . $row['modelo'] . "</td>";
                                echo "<td>" . $row['horario'] . "</td>";
                                echo "<td>" . $row['dataDevolucao'] . "</td>";
                                echo "<td>";
                                    echo "<a  title='Delete Record' data-toggle='tooltip'><span onclick='btnAlert()' class='btn btn-danger'>Cancelar aluguel</span></a>";
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                    echo "</table>";

                    $result->free();
                } else {
                    echo "<p class='lead'><em>Nenhum registro foi encontrado.</em></p>";
                }
            } else {
                echo "ERROR: Não foi possível executar $sql. ".$mysqli->error;
            }
            $mysqli->close();
            ?>

            <!--<div class="jumbotron">-->
                <!--<h2>-->
                    <!--Carro alugado-->
                <!--</h2>-->
                <!--<div class="container">-->
                    <!--<ul class="list-group mt-5">-->
                      <!--<li class="list-group-item active mt-5">Carro alugado</li>-->
                      <!--<li class="list-group-item">-->
                    <!--<div class="row">-->
                        <!--<div class="col-md-12">-->
                            <!--<div class="row">-->
                                <!--<div class="col-md-4">-->
                                    <!--Nome do carro-->
                                <!--</div>-->
                                <!--<div class="col-md-4">-->
                                    <!--<p>Data de inicio(03/05/2018)</p>-->
                                    <!--<p>Data de devolucao(12/05/2018)</p>-->
                                <!--</div>-->
                                <!--<div class="col-md-4">-->
                                    <!--<button type="button" class="btn btn-danger">Cancelar</button>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                      <!--</li>-->
                    <!--</ul>-->

                <!--</div>-->

            <!--</div>-->
        </div>
    </div>

</div>
<!-- /carro alugado -->


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