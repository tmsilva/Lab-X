<?php
require "../../db.php";
$conexao = Conexao::getInstance();

$sql = 'SELECT * FROM produto';
$stm = $conexao->prepare($sql);
$stm->execute();

$produtos = $stm->fetchAll(PDO::FETCH_OBJ);

echo json_encode($produtos);