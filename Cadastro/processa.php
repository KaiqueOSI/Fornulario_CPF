<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);

 list($ano, $mes, $dia) = explode('-', $data);
 $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
 $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
 $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);



$resultado = "INSERT INTO formulario (nome, mes, cpf, idade, ano, dia) VALUES ('$nome', '$mes', '$cpf', '$idade', '$ano', '$dia')";
$resultado = mysqli_query($conexao, $resultado);



if(mysqli_insert_id($conexao)){
header("location:index.php");
}
else{
	header("location:index.php");
}

