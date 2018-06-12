
<?php
session_start();

if (isset($_POST["id"]) && !empty($_POST["id"])){

    require_once '../config/config.php';
    global $select_aluguel;

    $carroAlugadoId=$_SESSION['carroAlugadoId'];

    $sql = "SELECT * FROM aluguel";
    if ($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            while ($row = $result->fetch_array()) {
                if($row['carro_idCarro'] == $carroAlugadoId){
                    $select_aluguel = $row['idAluguel'];
                }
            }   
        }
    }


    $sql = "INSERT INTO ordemdeservico (usuario_idCliente, usuario_idFuncionario, aluguel_idAluguel, tratamento, statusDaOrdem) VALUES (?, ? ,? ,?, ?)";

    if ($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("iiiss", $param_usuario_idCliente, $param_id, $param_aluguel_idAluguel, $param_tratamento, $param_statusDaOrdem);

        $param_usuario_idCliente = $_SESSION['idUsuario'];
        $param_id = trim($_POST["id"]);
        $param_aluguel_idAluguel = $select_aluguel;
        $param_tratamento = "Motirista particular";
        $param_statusDaOrdem = "não iniciado";




        if ($stmt->execute()){
            header("location: ../../view/aluguelAtual.php");
            exit();
        } else {
            echo "Algo deu errado. Por favor, tente novamente mais tarde.";
        }
    }

    $stmt->close();

    $mysqli->close();
} else {
    if (empty(trim($_GET["id"]))){
        header("location: ../error.php");
    }
}
?>

    <!DOCTYPE html>
    <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alucar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Completar Aluguel</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-success fade in">
                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                        <p>Tem certeza de que deseja Completar o aluguel?</p><br>
                        <p>
                            <input type="submit" value="Sim" class="btn btn-primary">
                            <a href="../../view/aluguelAtual.php" class="btn btn-default">Não</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 10/06/2018
 * Time: 19:29
 */