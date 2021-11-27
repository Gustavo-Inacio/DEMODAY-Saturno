<?php
    if(!isset($_POST['nomeProduto']) || !isset($_POST['precoVenda']) || !isset($_POST['codBar']) || !isset($_POST['precoCompra']) || !isset($_POST['validade']) || !isset($_POST['imgProduto']) || !isset($_POST['quantidade']) || !isset($_POST['lote'])){
        echo 'preencha todas as informacoes';
        die();
    }

    $nome_produto = $_POST['nomeProduto']; //conectar em outra tabela
    $preco_de_venda = $_POST['precoVenda']; // está faltando no banco
    $codigo_lote = $_POST['codBar']; 
    $valor_compra = $_POST['precoCompra'];
    $validade = $_POST['validade']; // validade está no status_produto?
    $img_produto = $_POST['imgProduto'];
    $quantidade_produtos_lote = $_POST['quantidade'];
    $id_lote = $_POST['lote'];


    require './connect.php';
    $connect = new DbConnection();
    $con = $connect->connect();

    $query = "SELECT COUNT(*) as quantity from lote where codigo_lote = '$codigo_lote'";
    $queryVerifyExistEmail = $con->query($query);
    $resultVerifyEmail = $queryVerifyExistEmail->fetch(PDO::FETCH_ASSOC);
    
    if(!isset($resultVerifyEmail['quantity']) || $resultVerifyEmail['quantity'] > 0){ // existe uma conta com esse código de barras já cadastrado
        header("Location: ../public/cadastro-produto/cadastrop.php?status=0");
        die();
    }
    else{
        $stmt = $con->prepare("INSERT INTO LOTE (quantidade_produtos_lote, codigo_lote) VALUES (:quantidade_produtos_lote, :codigo_lote)");
        //$stmt->bindValue(':id_lote', $id_lote);
        $stmt->bindValue(":quantidade_produtos_lote", $quantidade_produtos_lote);
        $stmt->bindValue(":codigo_lote", $codigo_lote);
        $stmt->execute();

        $cmdGetUserId = $con->query("SELECT id_lote from lote where codigo_lote= '$codigo_lote'");
        $resultUserId = $cmdGetUserId->fetch(PDO::FETCH_ASSOC);

        $pass_stmt = $con->prepare("INSERT INTO lote (id_lote, senha_cadastro) VALUES (:userId, :userPass)");//Onde está esse userId?
        $pass_stmt->bindValue(':userId', $resultUserId['usuario_id']);
        $pass_stmt->bindValue(":userPass", $user_pass);
        $pass_stmt->execute();

        header("Location: ../public/cadastro-produto/cadastrop.php?status=1");
        die();
    }
    


?>