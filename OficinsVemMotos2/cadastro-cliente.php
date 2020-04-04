<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Clientes</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="_css/estilo_barra.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo_cadastro_cliente.css">

	<script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="_js/jquery.mask.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cpf").mask("000.000.000-00")
			$("#cnpj").mask("00.000.000/0000-00")
			$("#telefone").mask("(00) 0000-0000")
			$("#salario").mask("999.999.990,00", {reverse: true})
			$("#cep").mask("00.000-000")
			$("#dataNascimento").mask("00/00/0000")
			
			$("#rg").mask("999.999.999-W", {
				translation: {
					'W': {
						pattern: /[X0-9]/
					}
				},
				reverse: true
			})
			
			var options = {
				translation: {
					'A': {pattern: /[A-Z]/},
					'a': {pattern: /[a-zA-Z]/},
					'S': {pattern: /[a-zA-Z0-9]/},
					'L': {pattern: /[a-z]/},
				}
			}
			
			$("#placa").mask("AAA-0000", options)
			
			$("#codigo").mask("AA.LLL.0000", options)
			
			$("#cel").mask("(00) 0000-00009")
			
			$("#cel").blur(function(event){
				if ($(this).val().length == 15){
					$("#cel").mask("(00) 00000-0009")
				}else{
					$("#cel").mask("(00) 0000-00009")
				}
			})
		})
	</script>


</head>
<body id="corpo">

	<?php

	if(isset($_SESSION['msg']))
		echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	?>
	
	<!-- Menu de navegação -->
	<nav class="navbar fixed-top navbar-default" style="background: #FFFF00">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
					<span class="sr-only">Alternar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- a href="#" class="navbar-brand">VELMOTOS</a>-->
				<a id="vel" class="navbar-brand" href="index.html">VEL<span id="motos">MOTOS</span></a>
			</div>

			<div class="collapse navbar-collapse" id="barra-navegacao">
				<!--Menu Cliente -->
				<ul class="nav navbar-nav dropdown">
					<li><a id="lin" href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
						<img src="_img/usuario32.png">
					</span> Clientes <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="cadastro-cliente.html"><span>
							<img src="_img/add_user242.png">
						</span>Cadastrar</a></li><hr />
						<li><a class="dropdown-item" href="pesq_cliente"><img src="_img/pesq32.png">
						</span>Pesquisar</a></li>
					</ul>
				</li>

				<!--Menu Produtos -->
				<li><a id="lin" href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
					<img src="_img/box32.png">
				</span>Produtos <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="cadastro-produto.html"><span>
						<img src="_img/box_add32.png">
					</span>Cadastrar</a></li><hr />
					<li><a class="dropdown-item" href="pesq_cliente"><img src="_img/pesq32.png">
					</span>Pesquisar</a></li>
				</ul>
			</li><!--Fim menu Produtos -->
			

			<!--Menu Fornecedores -->
			<li><a id="lin" href="#" class="dropdown-toggle" data-toggle="dropdown"><span>
				<img src="_img/entrega.png">
			</span>Fornecedores <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="cadastro-fornecedores.html"><span>
					<img src="_img/forn_cad32.png">
				</span>Cadastrar</a></li><hr />
				<li><a class="dropdown-item" href="pesq_cliente"><img src="_img/pesq32.png">
				</span>Pesquisar</a></li>
			</ul>
		</li><!--Fim Menu Fornecedores -->
	</div><!--Fim de container -->  
</nav><!-- Fim de Menu de navegação -->


<form class="row col-md-6" id="formulario"><!--style="border: solid 1px black;"-->
	<div id="dados-cliente" class="form-group col-sm-6"><label>DADOS DO CLIENTE</label></div>
	<div class="row">

	</div>
	<div class="row">
		<div class="form-group col-sm-3 txtform">
			<label for="nome">Nome <h11>*</h11></label>
			<input id="nome" type="text" class="form-control todos-inputs" placeholder="Nome" required="">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-3 txtform">
			<label for="cpf">CPF <h11>*</h11></label>
			<input id="cpf" type="text" class="form-control todos-inputs" placeholder="xxx.xxx.xxx-xx" required="">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-2 txtform">
			<label for="cel">Celular <h11>*</h11></label>
			<input id="cel" type="text" class="form-control todos-inputs" placeholder="(xx) xxxxx-xxxx" required="">
		</div>            
	</div>

	<div class="row">
		<div class="form-group col-sm-3 txtform">            
			<label for="email">E-mail</label>
			<input id="email" type="email" class="form-control todos-inputs" placeholder="email@email.com">            
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-3 txtform">            
			<label for="end">Endereço</label>
			<input id="end" type="text" class="form-control todos-inputs" placeholder="Nome da rua">            
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-3 txtform">            
			<label for="bairro">Bairro</label>
			<input id="bairro" type="text" class="form-control todos-inputs" placeholder="Nome do bairro">            
		</div>
	</div>

	<div class="row">
		<div id="dados-moto" class="form-group col-sm-6">
			<label id="dm">DADOS DA MOTO</label>
		</div>
	</div>


	<div class="row">
		<div class="form-group col-sm-3 txtform">            
			<label for="mod">Modelo <h11>*</h11></label>
			<input id="mod" type="text" class="form-control todos-inputs" placeholder="Modelo da moto" required="">            
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-2 txtform">            
			<label for="placa">Placa <h11>*</h11></label>
			<input id="placa" type="text" class="form-control todos-inputs" placeholder="XXX-XXXX" required="">            
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-3 txtform">            
			<label for="cor">Cor </label>
			<input id="cor" type="text" class="form-control todos-inputs" placeholder="Modelo da moto">            
		</div>
	</div>

	<div class="row">
		<div class="form-group col-sm-2 txtform">            
			<label for="ano">Ano <h11>*</h11></label>
			<input id="ano" type="text" class="form-control todos-inputs" placeholder="XXX-XXXX" required="">            
		</div>
	</div>


	<div id="botoes" class="form-group col-sm-3">            
		<button class="btn btn-success" style="font-size: 14pt;"><i class="fas fa-save"></i> CADASTRAR</button>

	</div>

	<div id="botoes" class="form-group col-sm-3"> 
		<button type="reset" class="btn btn-warning" style="font-size: 14pt;"><i class="fas fa-sync-alt"></i> CANCELAR</button>          
	</div>

</form>

</body>
</html>