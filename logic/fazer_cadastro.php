<?php
    if(!isset($_POST['pass']) || !isset($_POST['email']) || !isset($_POST['username'])){
        echo 'preencha todas as informacoes';
        die();
    }

    $user_pass = $_POST['pass'];
    $user_email = $_POST['email'];
    $user_name = $_POST['username'];

    require './connect.php';
    $connect = new DbConnection();
    $con = $connect->connect();

    $query = "SELECT COUNT(*) as quantity from usuarios where email_usuario = '$user_email'";
    $queryVerifyExistEmail = $con->query($query);
    $resultVerifyEmail = $queryVerifyExistEmail->fetch(PDO::FETCH_ASSOC);

    if(!isset($resultVerifyEmail['quantity']) || $resultVerifyEmail['quantity'] > 0){ // existe uma conta com esse emial já cadastrado
        header("Location: ../public/Cadastro/cadastro.php?status=0");
        die();
    }
    else{
        $stmt = $con->prepare("INSERT INTO USUARIOS (nome_usuario, email_usuario) VALUES (:username, :user_email)");
        $stmt->bindValue(':username', $user_name);
        $stmt->bindValue(":user_email", $user_email);
        $stmt->execute();

        $cmdGetUserId = $con->query("SELECT usuario_id from usuarios where email_usuario= '$user_email'");
        $resultUserId = $cmdGetUserId->fetch(PDO::FETCH_ASSOC);

        $pass_stmt = $con->prepare("INSERT INTO usuarios_senha (id_usuario, senha_cadastro) VALUES (:userId, :userPass)");
        $pass_stmt->bindValue(':userId', $resultUserId['usuario_id']);
        $pass_stmt->bindValue(":userPass", $user_pass);
        $pass_stmt->execute();

        header("Location: ../public/Cadastro/cadastro.php?status=1");
        die();
    }
    


?>