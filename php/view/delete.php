<?php

if (isset($_POST["id"]) && !empty($_POST["id"])){

    require_once '../config/config.php';

    $sql = "DELETE FROM aluguel WHERE idAluguel = ?";

    if ($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("i", $param_id);

        $param_id = trim($_POST["id"]);

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
                    <h1>Cancelar Aluguel</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-danger fade in">
                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                        <p>Tem certeza de que deseja cancelar o aluguel?</p><br>
                        <p>
                            <input type="submit" value="Sim" class="btn btn-danger">
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