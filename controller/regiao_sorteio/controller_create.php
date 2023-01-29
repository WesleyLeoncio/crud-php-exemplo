<?php
session_start();
$path = "../../";
include_once($path."database/dao/RegiaoDao.php");
include_once($path."database/connection.php");
include_once($path."models/Regiao.php");

if (!empty($_POST)) {
    if (isset($conn)) {
        $regiaoDao = new RegiaoDao($conn);
        $regiao = new Regiao(0,$_POST['nome'], $_POST['descricao']);
        $regiaoDao->create($regiao);
        $_SESSION["msg"]="Região registrada com sucesso!";
        header("Location:". $path."view/regiao-sorteio");
    }

}




