<?php 
    if(!isset($_POST['email']) || !isset($_POST['pass'])){
        header("Location: ../public/login/login.php?status=0");
        die();
    }

    session_start();

    require './connect.php';
    $connect = new DbConnection();
    $con = $connect->connect();

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $account = $con->query("SELECT COUNT(*) as quantity, usuarios.nome_usuario,  usuarios.usuario_id from usuarios 
    inner join usuarios_senha 
    on usuarios_senha.id_usuario = usuarios.usuario_id and usuarios.status_usuario=1 and usuarios_senha.status_cadastro = 1
    and usuarios.email_usuario = '$email' and usuarios_senha.senha_cadastro = '$pass';");

    $backToLogin = '../public/login/login.php?status=0';

    if($account){
        $dataAcc = $account->fetch(PDO::FETCH_ASSOC);
        if($dataAcc['quantity'] > 0){
            
            header("Location: ../public/Perfil/perfil.php");
            $_SESSION['nome_usuario'] = $dataAcc['nome_usuario'];
            $_SESSION['usuario_id'] = $dataAcc['usuario_id'];
            die();
        }
        else{
            header("Location: {$backToLogin}");
        }
    }
    else{
        header("Location: {$backToLogin}");
    }

?>