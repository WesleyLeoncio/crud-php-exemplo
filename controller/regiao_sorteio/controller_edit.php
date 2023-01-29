<?php
session_start();
$BASE_URL = __DIR__;
include_once($BASE_URL ."/../../database/connection.php");
include_once($BASE_URL ."/../../database/dao/RegiaoDao.php");
include_once($BASE_URL ."/../../models/Regiao.php");



if (isset($conn)) {
    $regiaoDao = new RegiaoDao($conn);
}

$id = null;
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
}
if (!empty($id)) {
    $response = $regiaoDao->findById($id);
}

if (!empty($_POST)) {
    $regiao = new Regiao($_POST['id'], $_POST['nome'],$_POST['descricao']);
    $regiaoDao->update($regiao);
    $_SESSION["msg"]="Região com o id:".$regiao->getIdRegiao()." alterado sucesso!";
    header("Location:". "../../view/regiao-sorteio");
}