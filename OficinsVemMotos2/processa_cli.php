<?php
session_start();
include_once("conexao.php");
/*
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
/*
echo "Nome: $nome <br>";
echo "Email: $email <br>"; */

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
/*$endereco = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'cel', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$modelo = filter_input(INPUT_POST, 'moto', FILTER_SANITIZE_STRING);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);*/

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";


/*$result_usuario = "INSERT INTO tb_clientes (nome_cli, endereco_cli, cpf_cli, celular_cli, email_cli, bairro_cli, moto_modelo_cli, placa_moto_cli, cor_moto_cli, ano_moto_cli) VALUES ('$nome', '$endereco', '$cpf',  '$telefone', '$email', '$bairro', '$modelo',  '$cor', '$placa ', '$ano')";*/

result_usuario = "INSERT INTO tb_clientes (nome_cli, ) VALUES ('$nome')";

$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</P>";
	header("Location: index_cad_cli.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não cadastrado!</P>";
	header("Location: index_cad_cli.php");
}

?>