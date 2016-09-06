<?php
require "../../db.php";
$conexao = Conexao::getInstance();

$produto = json_decode(file_get_contents("php://input"));

$descricao = $produto->descricao;
$codigo_barras = $produto->codigo_barras;
$quantidade = $produto->quantidade;
$valor = $produto->valor;
$validade = $produto->validade;

$sql = "INSERT INTO produto VALUES ('$descricao ','$codigo_barras','$quantidade','$valor','$validade')";

mysqli_query($conexao, $sql);
echo true;
?>