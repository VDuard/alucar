class Cliente extends Usuario {

	CadastrarCliente()
	{
		if(this.ValidacaoDeDados()){
			alert('tudo shop d++++');
		}
		//passa pro bd
	}

	//valida os dados digitados pelo usuario
	ValidacaoDeDados()
	{			
		var returnValue = true;
		alert (this.cep.length);

		//verificar quantidade de casas no cep
		if(this.cep.length > 8)
		{
			returnValue = false;
			alert('Cep informado inválido, numero muito grande');

		}
		if(this.cep.indexOf("-") > -1){
			returnValue = false;
			alert('Cep informado inválido, caracter especial encontrado');

		}
		//verificar quantidade de casas no telefone
		if(this.telefone.length > 12 || this.celular.length > 12 )
		{
			returnValue = false;
			alert('contato informado inválido, numero muito grande');

		}

		//verificar quantidade de casas no cpf
		if(this.cpf.length > 11 )
		{
			returnValue = false;
			alert('cpf informado inválido, numero muito grande');

		}

		//verificar quantidade de casas no cnh
		if(this.cnh.length > 11 )
		{
			returnValue = false;
			alert('cnh informado inválido, numero muito grande');

		}

		//verificar email valido
		if(this.email.indexOf("@") > -1 || this.email.indexOf(".") > -1){

		}else{
			returnValue = false;
			alert('email informado inválido, caracter especial nao encontrado');

		}

		//verificar senha valida
		if(this.senha.indexOf("@") > -1 || this.senha.indexOf(".") > -1){

		}else{
			returnValue = false;
			alert('senha informado inválido, caracter especial nao encontrado');

		}


		return returnValue;
	}


}


var cliente = new Cliente();

var buttonVar = document.getElementById("submitBut");

buttonVar.onclick = function()
{
	cliente.nome = document.getElementById("name").value;
	cliente.endereco1 = document.getElementById("endereco1").value;
	cliente.endereco2 = document.getElementById("endereco2").value;
	cliente.cep = document.getElementById("cep").value;
	cliente.telefone = document.getElementById("tel").value;
	cliente.celular = document.getElementById("cel").value;
	cliente.tipoPessoa = document.getElementById("tipoSelect").value;
	cliente.cpf = document.getElementById("cpf/cnpj").value;
	cliente.cnh = document.getElementById("cnh").value;
	cliente.dataNasc = document.getElementById("nascimento").value;
	cliente.pais = document.getElementById("pais").value;
	cliente.cidadeUf = document.getElementById("estado").value;
	cliente.cidade = document.getElementById("cidade").value;
	cliente.email = document.getElementById("email").value;
	cliente.nomeUsuario = document.getElementById("username").value;
	cliente.senha = document.getElementById("senha").value;

	cliente.CadastrarCliente();

	//alert('reste');

}


//usuario.aletaClasse();
//usuario.nome('testando nome');
//var nomePrint = usuario.meuNome;
//usuario.segundo = "nao mais segText";

