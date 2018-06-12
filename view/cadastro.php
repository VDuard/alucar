<?php

require_once '../php/config/config.php';

$nome = $endereco = $complemento = $cep = $telefone = $celular = $tipo_pessoa = $cpf = $cnh = $data_nascimento = $pais = $estado =$cidade = $email = $usuario = $senha = "";
$nome_err = $endereco_err = $complemento_err = $cep_err = $telefone_err = $celular_err = $tipo_pessoa_err = $cpf_err = $cnh_err = $data_nascimento_err = $pais_err = $estado_err = $cidade_err = $email_err = $usuario_err = $senha_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_nome = trim($_POST["nome"]);
    if (empty($input_nome)){
        $nome_err = "Por favor, insira um nome";
    } elseif (!filter_var(trim($_POST["nome"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $nome_err = 'Por favor, insira um nome válido';
    } else{
        $nome = $input_nome;
    }

    $input_endereco = trim($_POST["endereco"]);
    if (empty($input_endereco)){
        $endereco_err = 'Por favor, insira um endereço';
    } else {
        $endereco = utf8_encode($input_endereco);
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

    $input_tipo_pessoa = trim($_POST["tipo_pessoa"]);
    if (empty($input_tipo_pessoa)){
        $tipo_pessoa_err = 'Por favor insira um tipo de pessoa';
    } else {
        $tipo_pessoa = $input_tipo_pessoa;
    }
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
        $data_nascimeto_err = 'Por favor insira sua data de nascimento';
    } else {
        $data_nascimento = $input_data_nascimento;
    }

    $input_pais = trim($_POST["pais"]);
    if (empty($input_pais)){
        $pais_err = 'Por favor insira seu pais';
    } else {
        $pais = $input_pais;
    }

    $input_estado = trim($_POST["estado"]);
    if (empty($input_estado)){
        $estado_err = 'Por favor insira seu estado';
    } else {
        $estado = $input_estado;
    }

    $input_cidade = trim($_POST["cidade"]);
    if (empty($input_cidade)){
        $cidade_err = 'Por favor insira sua cidade';
    } else {
        $cidade = $input_cidade;
    }

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

    if (empty($nome_err) && empty($endereco_err) && empty($cep_err) && empty($telefone_err) && empty($celular_err) && empty($tipo_pessoa_err) && empty($cpf_err) && empty($cnh_err) && empty($data_nascimento_err) && empty($pais_err) && empty($estado_err) && empty($cidade_err) && empty($email_err) && empty($usuario_err) && empty($senha_err)){
        $sql = "INSERT INTO usuario (hierarquia_idhierarquia, funcao_idfuncao, nome, endereco, cep, telefone, celular, tipo_pessoa, cpf, usuario, senha, email, dataNasc, pais_idpais, estado_idestado, cidade_idcidade, cnh, complemento) VALUES (?, ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, ?, ?, ?)";

        if ($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("ssssssssssssssssss", $param_hierarquia, $param_funcao, $param_nome, $param_endereco, $param_cep, $param_telefone, $param_celular, $param_tipo_pessoa, $param_cpf, $param_usuario, $param_senha, $param_email, $param_data_nascimento, $param_pais, $param_estado, $param_cidade, $param_cnh, $param_complemento);

            $param_hierarquia = 4;
            $param_funcao = 4;
            $param_nome = $nome;
            $param_endereco = $endereco;
            $param_cep = $cep;
            $param_telefone = $telefone;
            $param_celular = $celular;
            $param_tipo_pessoa = "F";
            $param_cpf = $cpf;
            $param_usuario = $usuario;
            $param_senha = $senha;
            $param_email = $email;
            $param_data_nascimento = $data_nascimento;
            $param_pais = $pais;
            $param_estado = $estado;
            $param_cidade = $cidade;
            $param_cnh = $cnh;
            $param_complemento = $complemento;

            if ($stmt->execute()){
                header("location: ../index.php");
                exit();
            } else {
                echo "<script language='JavaScript' type='text/javascript'>
                            alert('Algo deu errado. Por favor, tente novamente mais tarde.');
                            window.location.href='cadastro.php';
                      </script>";
                die();
            }
        }

        $stmt->close();
    }
    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/logo.ico">

    <link rel="stylesheet" href="../css/cadastro.css">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


</head>
<body>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->


    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navBar" style="background-color: #ff6600;">
        <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" alt="logoNav" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                </li>

            </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Usuário" aria-label="Email">
                    <input class="form-control mr-sm-2" type="password" placeholder="Senha" aria-label="Senha">
                    <button class="btn btn-dark my-2 my-sm-0" type="submit">Login</button>
                </form>
        </div>
    </nav>
    <!-- /NavBar -->

    <!-- Cadastro -->
    <div class="container" id="corpo">
        <img src="../img/cadastro/banner_top.png" alt="bannertop" class="img-fluid" id="bannerTit">
        <h2>Cadastro</h2>
        <hr color="#ff6600">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($nome_err)) ? 'has-error' : ''; ?>">
                <label>Nome Completo *</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
                <span class="help-block"><?php echo $nome_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($endereco_err)) ? 'has-error' : ''; ?>">
                <label>Endereço *</label>
                <textarea type="address" class="form-control" name="endereco"><?php echo utf8_decode($endereco); ?></textarea>
                <span class="help-block"><?php echo $endereco_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($complemento_err)) ? 'has-error' : ''; ?>">
                <label>Complemento *</label>
                <input type="text" class="form-control" name="complemento" value="<?php echo $complemento; ?>">
                <span class="help-block"><?php echo $complemento_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($cep_err)) ? 'has-error' : ''; ?>">
                <label>CEP *</label>
                <input type="text" class="form-control" maxlength="11" name="cep" value="<?php echo $cep; ?>">
                <small id="cepjHelp" class="form-text text-muted">Apenas números.</small>
                <span class="help-block"><?php echo $cep_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($telefone_err)) ? 'has-error' : ''; ?>">
                <label>Telefone *</label>
                <input type="tel" class="form-control" name="telefone" value="<?php echo $telefone; ?>">
                <small id="telHelp" class="form-text text-muted">Apenas números.</small>
                <span class="help-block"><?php echo $telefone_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($celular_err)) ? 'has-error' : ''; ?>">
                <label>Celular </label>
                <input type="tel" class="form-control" name="celular" value="<?php echo $celular; ?>">
                <small id="celHelp" class="form-text text-muted">Apenas números.</small>
                <span class="help-block"><?php echo $celular_err; ?></span>
            </div>

            <div class="form-group">
                <label for="tipoSelect">Tipo de pessoa</label>
                    <select class="form-control" id="tipoSelect" name="tipo_pessoa">
                      <option>J</option>
                      <option>F</option>
                    </select>
            </div>

            <div class="form-group <?php echo (!empty($cpf_err)) ? 'has-error' : ''; ?>">
                <label>CPF/CNPJ *</label>
                <input type="text" class="form-control" maxlength="11" name="cpf" value="<?php echo $cpf; ?>">
                <small id="cpf/cnpjHelp" class="form-text text-muted">Apenas números.</small>
                <span class="help-block"><?php echo $cpf_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($cnh_err)) ? 'has-error' : ''; ?>">
                <label>CNH</label>
                <input type="text" class="form-control" name="cnh" value="<?php echo $cnh; ?>">
                <small id="cnhHelp" class="form-text text-muted">Apenas números.</small>
                <span class="help-block"><?php echo $cnh_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($data_nascimento_err)) ? 'has-error' : ''; ?>">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
                <span class="help-block"><?php echo $data_nascimento_err; ?></span>
            </div>

            <div class="form-group">
                <label>País</label>
                    <select class="form-control" id="pais" name="pais">
                        <option value="AF">Afganistán</option>
                        <option value="AL">Albania</option>
                        <option value="DE">Alemania</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antártida</option>
                        <option value="AG">Antigua y Barbuda</option>
                        <option value="AN">Antillas Holandesas</option>
                        <option value="SA">Arabia Saudí</option>
                        <option value="DZ">Argelia</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaiyán</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrein</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BE">Bélgica</option>
                        <option value="BZ">Belice</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermudas</option>
                        <option value="BY">Bielorrusia</option>
                        <option value="MM">Birmania</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia y Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BRA">Brasil</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="BT">Bután</option>
                        <option value="CV">Cabo Verde</option>
                        <option value="KH">Camboya</option>
                        <option value="CM">Camerún</option>
                        <option value="CA">Canadá</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CY">Chipre</option>
                        <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comores</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, República Democrática del</option>
                        <option value="KR">Corea</option>
                        <option value="KP">Corea del Norte</option>
                        <option value="CI">Costa de Marfíl</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croacia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="DK">Dinamarca</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egipto</option>
                        <option value="SV">El Salvador</option>
                        <option value="AE">Emiratos Árabes Unidos</option>
                        <option value="ER">Eritrea</option>
                        <option value="SI">Eslovenia</option>
                        <option value="ES" selected>España</option>
                        <option value="US">Estados Unidos</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Etiopía</option>
                        <option value="FJ">Fiji</option>
                        <option value="PH">Filipinas</option>
                        <option value="FI">Finlandia</option>
                        <option value="FR">Francia</option>
                        <option value="GA">Gabón</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GD">Granada</option>
                        <option value="GR">Grecia</option>
                        <option value="GL">Groenlandia</option>
                        <option value="GP">Guadalupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GY">Guayana</option>
                        <option value="GF">Guayana Francesa</option>
                        <option value="GN">Guinea</option>
                        <option value="GQ">Guinea Ecuatorial</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="HT">Haití</option>
                        <option value="HN">Honduras</option>
                        <option value="HU">Hungría</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IQ">Irak</option>
                        <option value="IR">Irán</option>
                        <option value="IE">Irlanda</option>
                        <option value="BV">Isla Bouvet</option>
                        <option value="CX">Isla de Christmas</option>
                        <option value="IS">Islandia</option>
                        <option value="KY">Islas Caimán</option>
                        <option value="CK">Islas Cook</option>
                        <option value="CC">Islas de Cocos o Keeling</option>
                        <option value="FO">Islas Faroe</option>
                        <option value="HM">Islas Heard y McDonald</option>
                        <option value="FK">Islas Malvinas</option>
                        <option value="MP">Islas Marianas del Norte</option>
                        <option value="MH">Islas Marshall</option>
                        <option value="UM">Islas menores de Estados Unidos</option>
                        <option value="PW">Islas Palau</option>
                        <option value="SB">Islas Salomón</option>
                        <option value="SJ">Islas Svalbard y Jan Mayen</option>
                        <option value="TK">Islas Tokelau</option>
                        <option value="TC">Islas Turks y Caicos</option>
                        <option value="VI">Islas Vírgenes (EEUU)</option>
                        <option value="VG">Islas Vírgenes (Reino Unido)</option>
                        <option value="WF">Islas Wallis y Futuna</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italia</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japón</option>
                        <option value="JO">Jordania</option>
                        <option value="KZ">Kazajistán</option>
                        <option value="KE">Kenia</option>
                        <option value="KG">Kirguizistán</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="LA">Laos</option>
                        <option value="LS">Lesotho</option>
                        <option value="LV">Letonia</option>
                        <option value="LB">Líbano</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libia</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lituania</option>
                        <option value="LU">Luxemburgo</option>
                        <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malasia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldivas</option>
                        <option value="ML">Malí</option>
                        <option value="MT">Malta</option>
                        <option value="MA">Marruecos</option>
                        <option value="MQ">Martinica</option>
                        <option value="MU">Mauricio</option>
                        <option value="MR">Mauritania</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">México</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldavia</option>
                        <option value="MC">Mónaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Níger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk</option>
                        <option value="NO">Noruega</option>
                        <option value="NC">Nueva Caledonia</option>
                        <option value="NZ">Nueva Zelanda</option>
                        <option value="OM">Omán</option>
                        <option value="NL">Países Bajos</option>
                        <option value="PA">Panamá</option>
                        <option value="PG">Papúa Nueva Guinea</option>
                        <option value="PK">Paquistán</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Perú</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PF">Polinesia Francesa</option>
                        <option value="PL">Polonia</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="UK">Reino Unido</option>
                        <option value="CF">República Centroafricana</option>
                        <option value="CZ">República Checa</option>
                        <option value="ZA">República de Sudáfrica</option>
                        <option value="DO">República Dominicana</option>
                        <option value="SK">República Eslovaca</option>
                        <option value="RE">Reunión</option>
                        <option value="RW">Ruanda</option>
                        <option value="RO">Rumania</option>
                        <option value="RU">Rusia</option>
                        <option value="EH">Sahara Occidental</option>
                        <option value="KN">Saint Kitts y Nevis</option>
                        <option value="WS">Samoa</option>
                        <option value="AS">Samoa Americana</option>
                        <option value="SM">San Marino</option>
                        <option value="VC">San Vicente y Granadinas</option>
                        <option value="SH">Santa Helena</option>
                        <option value="LC">Santa Lucía</option>
                        <option value="ST">Santo Tomé y Príncipe</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leona</option>
                        <option value="SG">Singapur</option>
                        <option value="SY">Siria</option>
                        <option value="SO">Somalia</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="PM">St Pierre y Miquelon</option>
                        <option value="SZ">Suazilandia</option>
                        <option value="SD">Sudán</option>
                        <option value="SE">Suecia</option>
                        <option value="CH">Suiza</option>
                        <option value="SR">Surinam</option>
                        <option value="TH">Tailandia</option>
                        <option value="TW">Taiwán</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TJ">Tayikistán</option>
                        <option value="TF">Territorios franceses del Sur</option>
                        <option value="TP">Timor Oriental</option>
                        <option value="TG">Togo</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad y Tobago</option>
                        <option value="TN">Túnez</option>
                        <option value="TM">Turkmenistán</option>
                        <option value="TR">Turquía</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UA">Ucrania</option>
                        <option value="UG">Uganda</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistán</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabue</option>
                    </select>
            </div>

            <div class="form-group">
                <label>Estado</label>
                <?php
                    include_once '../php/config/config.php';

                    $sql = "SELECT * FROM estado";
                    if ($result = $mysqli->query($sql)){
                        if ($result->num_rows > 0){
                            echo "<select class='form-control' id='estado' name='estado'>";
                            while ($row = $result->fetch_array()){
                                echo "<option value='".$row['cod_estado']."'>".$row['nom_estado']."</option>";
                            }
                            echo "</select>";
                        }
                    }
                ?>
            </div>

            <div class="form-group">
                <label>Cidade</label>
                <?php
                include_once '../php/config/config.php';

                $sql = "SELECT * FROM cidade WHERE est_cidade = 'PB'";
                if ($result = $mysqli->query($sql)){
                    if ($result->num_rows > 0){
                        echo "<select class='form-control' id='cidade' name='cidade'>";
                        while ($row = $result->fetch_array()){
                            echo "<option value='".$row['cod_cidade']."'>".$row['nom_cidade']."</option>";
                        }
                        echo "</select>";
                    }
                }
                ?>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email *</label>
                <input type="email" class="form-control" aria-describedby="emailhelp" name="email" value="<?php echo $email; ?>">
                <small id="emailhelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($usuario_err)) ? 'has-error' : ''; ?>">
                <label>Usuário *</label>
                <input type="text" class="form-control" maxlength="30" name="usuario" value="<?php echo $usuario; ?>">
                <small id="usernameHelp" class="form-text text-muted">Até 30 caracteres.</small>
                <span class="help-block"><?php echo $usuario_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($senha_err)) ? 'has-error' : ''; ?>">
                <label>Senha *</label>
                <input type="password" class="form-control" aria-describedby="senha" maxlength="8" name="senha" value="<?php echo $senha; ?>">
                <small id="senhaHelp" class="form-text text-muted">Até 8 caracteres.</small>
                <span class="help-block"><?php echo $senha_err; ?></span>
            </div>

            <div class="from-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check1">
                    <label class="form-check-label" for="check1">Aceito os <a href="#">termos e condições</a></label>
                 </div>
<!--                <button type="submit" class="btn btn-dark" style="background-color: #ff6600" id = "submitBut">Submit</button>-->
                <input type="submit" class="btn btn-dark" style="background-color:#ff6600;" value="Submit">
                <a href="../index.php" class="btn btn-dark" style="background-color: red;">Cancel</a>
            </div>

        </form>

    </div>
    <!-- /Cadastro -->

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
<script src="../js/aplicationTesters/Yusef/usuario.js"></script>
<script src="../js/aplicationTesters/Yusef/cliente.js"></script>

<!-- jQuery -->
<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>

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