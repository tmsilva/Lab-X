<?php
require_once '../../db.php';

switch ($_SERVER["REQUEST_METHOD"]) {
    case 'GET':
        buscaProduto();
        break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        switch ($data->type) {
            case "select":
                echo "tste";
                break;
            case "insert":
                insereProduto($data->item);
                break;
            case "update":
                echo $type;
                break;
            case "delete":
                excluiProduto($data->item);
                break;
        }
        break;
}

function buscaProduto()
{
    $db = new Db();

    $sql = 'SELECT * FROM produto';

    echo json_encode($db->select($sql));
}


function excluiProduto($produto)
{
    $db = new Db();

    $id = $produto->id_produto;

    $sql = "DELETE FROM produto where id_produto = '$id '";

    echo $sql;

    $db->query($sql);
}

function insereProduto($produto)
{
    $db = new Db();

    $descricao = $produto->descricao;
    $codigo_barras = $produto->codigo_barras;
    $quantidade = $produto->quantidade;
    $valor = $produto->valor;
    $validade = $produto->validade;

    $sql = "INSERT INTO produto (descricao,	codigo_barras,	quantidade,	valor,	validade)VALUES ('$descricao ','$codigo_barras','$quantidade','$valor','$validade')";

    $db->query($sql);
}