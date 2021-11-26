<?php

    session_start();
    if(!isset($_SESSION['usuario_id'])){
        header("Location: ../public/login/login.php");
        die();
    }
    else{
        if(!isset($_POST['companyName']) || !isset($_POST['CNPJcompany']) || $_POST['companyName'] == "" || $_POST['CNPJcompany'] == ""){
            header("Location: ../public/Perfil/perfil.php?statusCreate=0");
            die();
        }
    }

    require 'connect.php';

    $compName = $_POST['companyName'];
    $cnpj = $_POST['CNPJcompany'];

    $connect = new DbConnection();
    $con = $connect->connect();

    $stmt = $con->prepare("INSERT INTO empresa (nome_empresa, cnpj_empresa, data_criacao_empresa) VALUES (:comp_name, :cnpj, current_time())");
    $stmt->bindValue("comp_name", $compName);
    $stmt->bindValue("cnpj", $cnpj);
    $stmt->execute();

    $compannyId = $con->query("SELECT id_empresa from empresa where cnpj_empresa = '$cnpj';");
    $compannyId = $compannyId->fetch(PDO::FETCH_ASSOC)['id_empresa'];

    $idPerfil = time() . $cnpj . $_SESSION['usuario_id'] . $compannyId;

    $stmt = $con->prepare("INSERT into perfil (id_perfil, id_empresa, data_criacao_perlfil, usuario_id, id_perfil_classificacao) VALUES (:perfil_id, :id_emp, current_time(), :user, 1)");
    $stmt->bindValue("id_emp", $compannyId);
    $stmt->bindValue("user", $_SESSION['usuario_id']);
    $stmt->bindValue("perfil_id", $idPerfil);
    $stmt->execute();

    $stmt = $con->prepare("INSERT INTO perfil_empresa (id_empresa, id_perfil) VALUES (:id_empresa, :id_perfil)");
    $stmt->bindValue("id_empresa", $compannyId);
    $stmt->bindValue("id_perfil", $idPerfil);
    $stmt->execute();

    header("Location: ../public/Perfil/perfil.php?statusCreate=1");
    die();

?>