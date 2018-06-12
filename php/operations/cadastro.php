<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 06/06/2018
 * Time: 15:33
 */

require_once '../config/config.php';

$nome = $endereco = $complemento = $cep = $telefone = $celular = $tipo_pessoa = $cpf = $cnh = $data_nascimento = $cidade = $email = $usuario = $senha = "";
$nome_err = $endereco_err = $complemento_err = $cep_err = $telefone_err = $celular_err = $tipo_pessoa_err = $cpf_err = $cnh_err = $data_nascimento_err  = $cidade_err = $email_err = $usuario_err = $senha_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_nome = trim($_POST["nome"]);
    if (empty($input_nome)){
        $name_err = "Por favor, insira um nome";
    } elseif (!filter_var(trim($_POST["name"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $name_err = 'Por favor, insira um nome válido';
    } else{
        $nome = $input_nome;
    }

    $input_endereco = trim($_POST["endereco"]);
    if (empty($input_endereco)){
        $endereco_err = 'Por favor, insira um endereço';
    } else {
        $endereco = $input_endereco;
    }

    $input_complemento = trim($_POST["complemento"]);
    if (empty($input_complemento)){
        $complemento_err = 'Por favor, insira um complemento de endereço';
    } else {
        $complemento = $input_complemento;
    }

    $input_cep = trim($_POST["cep"]);
    if (empty($input_cep)){
        $cep_err = 'Por favor insira o cep';
    } else {
        $cep = $input_cep;
    }

    $input_telefone = trim($_POST["telefone"]);
    if (empty($input_telefone)){
        $telefone_err = 'Por favor insira um número de telefone';
    } else {
        $telefone = $input_telefone;
    }

    $input_celular = trim($_POST["celular"]);
    if (empty($input_celular)){
        $celular_err = 'Por favor insira um número de celular';
    } else {
        $celular = $input_celular;
    }

    // tipo_pessoa

    $input_cpf = trim($_POST["cpf"]);
    if (empty($input_cpf)){
        $cpf_err = 'Por favor insira seu cpf';
    } else {
        $cpf = $input_cpf;
    }

    $input_cnh = trim($_POST["cnh"]);
    if (empty($input_cnh)){
        $cnh_err = 'Por favor insira sua cnh';
    } else {
        $cnh = $input_cnh;
    }

    $input_data_nascimento = trim($_POST["data_nascimento"]);
    if (empty($input_data_nascimento)){
        $data_nascimento_err = 'Por favor insira sua data de nascimento';
    } else {
        $data_nascimento = $input_data_nascimento;
    }

    // cidade

    $input_email = trim($_POST["email"]);
    if (empty($input_email)){
        $email_err = 'Por favor insira seu endereço de email';
    } else {
        $email = $input_email;
    }

    $input_usuario = trim($_POST["usuario"]);
    if (empty($input_usuario)){
        $usuario_err = 'Por favor insira um nome de usuario';
    } else {
        $usuario = $input_usuario;
    }

    $input_senha = trim($_POST["senha"]);
    if (empty($input_senha)){
        $senha_err = 'Por favor insira uma senha';
    } else {
        $senha = md5($input_senha);
    }

    if (empty($nome_err) && empty($endereco_err) && empty($cep_err) && empty($telefone_err) && empty($celular_err) && empty($cpf_err) && empty($cnh_err) && empty($data_nascimento_err) && empty($email_err) && empty($usuario_err) && empty($senha_err)){
        $sql = "INSERT INTO usuario (idUsuario, hierarquia_idhierarquia, funcao_idfuncao, cidade_idCidade, nome, endereco, cep, telefone, celular, cpf, usuario, senha, email, dataNasc, cnh, complemento) VALUES (NULL, ?, ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?)";

        if ($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("iiissssssssssss", $param_hierarquia, $param_funcao, $param_cidade, $param_nome, $param_endereco, $param_cep, $param_telefone, $param_celular, $param_cpf, $param_usuario, $param_senha, $param_email, $param_data_nascimento, $param_cnh, $param_complemento);

            $param_hierarquia = 4;
            $param_funcao = 5;
            $param_cidade = 1;
            $param_nome = $nome;
            $param_endereco = $endereco;
            $param_cep = $cep;
            $param_telefone = $telefone;
            $param_celular = $celular;
            $param_cpf = $cpf;
            $param_usuario = $usuario;
            $param_senha = $senha;
            $param_email = $email;
            $param_data_nascimento = $data_nascimento;
            $param_cnh = $cnh;
            $param_complemento = $complemento;

            if ($stmt->execute()){
                header("location: ../index.php");
                exit();
            } else {
                echo "Algo deu errado. Por favor, tente novamente mais tarde.";
            }
        }

        $stmt->close();
    }
    $mysqli->close();
}

?>