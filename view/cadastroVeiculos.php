
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


<!-- lista de veiculos -->
<div class="container">
	<ul class="list-group mt-5">
	  <li class="list-group-item text-light mt-5" style="background-color: #ff6600">Carros Cadastrados</li>
	  <li class="list-group-item">
	  <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					carro 1
				</div>
				<div class="col-md-4">
					status do carro(alugado, em aluguel, vistoria)
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-dark" style="background-color: #ff6600">
						<a href="#" style="color:inherit"> Editar Dados </a>
					</button>
				</div>
			</div>
		</div>
	  </div>
	  </li>
	  <li class="list-group-item">
	  <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					carro 2
				</div>
				<div class="col-md-4">
					status do carro(alugado, em aluguel, vistoria)
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-dark" style="background-color: #ff6600">
						<a href="#" style="color:inherit"> Editar Dados </a>
					</button>
				</div>
			</div>
		</div>
	  </div>
	  </li>
	  <li class="list-group-item">
	  <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					carro 3
				</div>
				<div class="col-md-4">
					status do carro(alugado, em aluguel, vistoria)
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-dark" style="background-color: #ff6600">
						<a href="#" style="color:inherit"> Editar Dados </a>
					</button>
				</div>
			</div>
		</div>
	  </div>
	  </li>
	  <li class="list-group-item">
	  <div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					carro 4
				</div>
				<div class="col-md-4">
					status do carro(alugado, em aluguel, vistoria)
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-dark" style="background-color: #ff6600">
						<a href="#" style="color:inherit"> Editar Dados </a>
					</button>
				</div>
			</div>
		</div>
	  </div>
	  </li>
	</ul>

</div>
<!-- /lista de veiculos -->

    <!-- cadastro de veiculos -->
    <div class="container" id="corpo">
        <img src="../img/cadastro/banner_top.png" alt="bannertop" class="img-fluid" id="bannerTit">
        <h2>Cadastrar novo Veículo</h2>
        <hr color="#ff6600">

        <form>

            <div class="form-group">
                
                <label for="name">Nome Completo *</label>
                <input type="name" class="form-control" id="name" placeholder="Nome">


                <label for="endereco1">Endereço *</label>
                <input type="name" class="form-control" id="endereco1" placeholder="Nome">
                <small id="endereco1Help" class="form-text text-muted">Linha 1.</small>

                <label for="endereco2">Endereço Cont.</label>
                <input type="name" class="form-control" id="endereco2" placeholder="Nome">
                <small id="endereco2Help" class="form-text text-muted">Linha 2.</small>

                <label for="cep">CEP *</label>
                <input type="number" class="form-control" id="cep" placeholder="CEP" maxlength="11">
                <small id="cepjHelp" class="form-text text-muted">Atpenas números.</small>

                <label for="tel">Telefone *</label>
                <input type="tel" class="form-control" id="tel" placeholder="DDD mais números">
                <small id="telHelp" class="form-text text-muted">Atpenas números.</small>

                <label for="cel">Celular </label>
                <input type="cel" class="form-control" id="cel" placeholder="DDD mais números">
                <small id="celHelp" class="form-text text-muted">Atpenas números.</small>

                <label for="tipoSelect">Tipo de pessoa</label>
                    <select class="form-control" id="tipoSelect">
                      <option>J</option>
                      <option>F</option>
                    </select>

                <label for="cpf/cnpj">CPF/CNPJ *</label>
                <input type="number" class="form-control" id="cpf/cnpj" placeholder="CPF/CNPJ" maxlength="11">
                <small id="cpf/cnpjHelp" class="form-text text-muted">Atpenas números.</small>


                <label for="cnh">CNH</label>
                <input type="text" class="form-control" id="cnh" placeholder="CNH">
                <small id="cnhHelp" class="form-text text-muted">Apenas números.</small>

                <label for="nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="nascimento" placeholder="Data de Nascimento">

                <label for="pais">País</label>
                    <select class="form-control" id="pais">
                      <option>USA</option>
                      <option>Brasil</option>
                      <option>Rússia</option>
                    </select>

                <label for="estado">Estado</label>
                    <select class="form-control" id="estado">
                      <option>São Paulo</option>
                      <option>Rio de Janeiro</option>
                      <option>Paraíba</option>
                    </select>

                <label for="cidade">Cidade</label>
                    <select class="form-control" id="cidade">
                      <option>Água Branca</option>
                      <option>Aguiar</option>
                      <option>Joao Pessoa</option>
                    </select>




            </div>
            <div class="form-group">

                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailhelp" placeholder="Email">
                <small id="emailhelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém.</small>

                <label for="username">Usuário *</label>
                <input type="username" class="form-control" id="username" placeholder="Usuário" maxlength="30">
                <small id="usernameHelp" class="form-text text-muted">Até 30 caracteres.</small>

                <label for="senha">Senha *</label>
                <input type="password" class="form-control" id="senha" aria-describedby="senha" placeholder="Senha" maxlength="8">
                <small id="senhaHelp" class="form-text text-muted">Até 8 caracteres.</small>

            </div>

            <div class="from-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check1">
                    <label class="form-check-label" for="check1">Aceito os <a href="#">termos e condições</a></label>
                 </div>
                <button type="submit" class="btn btn-dark" style="background-color: #ff6600" id = "submitBut">Submit</button>
            </div>

        </form>

    </div>
    <!-- /cadastro de veiculos -->



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