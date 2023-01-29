<?php
session_start();
$path = "../../";
include_once($path."database/connection.php");
include_once($path."database/dao/RegiaoDao.php");
if (isset($conn)) {
    $regiaoDao = new RegiaoDao($conn);
}

//SELECT ALL
$response = $regiaoDao->findAll();

//DELETE
$id = null;
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
}
if (!empty($id)) {
    $response = $regiaoDao->delete($id);
    $_SESSION["msg"]="Região com o id:".$id." removido sucesso!";
    header("Location:".$path."view/regiao-sorteio/url.php");
}
//////////////////////////
