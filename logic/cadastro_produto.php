<?php
    if(!isset($_POST['nomeProduto']) || !isset($_POST['precoVenda']) || !isset($_POST['codBar']) || !isset($_POST['precoCompra']) || !isset($_POST['validade']) || !isset($_POST['imgProduto']) || !isset($_POST['quantidade']) || !isset($_POST['lote'])){
        echo 'preencha todas as informacoes';
        die();
    }

    $nome_produto = $_POST['nomeProduto']; //conectar em outra tabela
    $preco_de_venda = $_POST['precoVenda']; // está faltando no banco
    $codigo_barras = $_POST['codBar']; 
    $valor_compra = $_POST['precoCompra'];
    $status_produto = $_POST['validade']; // validade está no status_produto?
    $img_produto = $_POST['imgProduto'];
    $quantidade_produtos_lote = $_POST['quantidade'];
    $codigo_lote = $_POST['lote'];


    require './connect.php';
    $connectarDb = new DbConnection();
    $conectar = $connectarDb->connect();

    $contarCodigoLote = "SELECT COUNT(*) as quantity from lote where codigo_lote = '$codigo_lote'";
    $queryVerificarLote = $conectar->query($contarCodigoLote);
    $aposVerificarLote = $queryVerificarLote->fetch(PDO::FETCH_ASSOC);
    
    if(!isset($aposVerificarLote['quantity']) || $aposVerificarLote['quantity'] > 0){ // existe uma conta com esse código de barras já cadastrado
        header("Location: ../public/cadastro-produto/cadastrop.php?status=0");
        die();
    }
    else{

         //Inserindo na tabela historico_compras
        $inserirDadoshCompras = $conectar->prepare("INSERT INTO historico_compras (valor_compra) VALUES (:valor_compra)");
        $inserirDadoshCompras->bindValue("valor_compra", $valor_compra);
        $inserirDadoshCompras->execute();
        //Inserindo na tabela lote
        $inserirDados = $conectar->prepare("INSERT INTO lote (id_lote, quantidade_produtos_lote, codigo_lote, codigo_barras) VALUES (:quantidade_produtos_lote, :codigo_lote, :codigo_barras)");
        //$stmt->bindValue(':id_lote', $id_lote); Como ele precisa ter o id único eu coloque ele bem abaixo 
        $inserirDados->bindValue("quantidade_produtos_lote", $quantidade_produtos_lote);
        $inserirDados->bindValue("codigo_lote", $codigo_lote);
        $inserirDados->bindValue("codigo_barras", $codigo_barras);//Precisa ser incluido no banco
        $inserirDados->execute();

        //Inserindo na tabela produtos
        $inserirDadosProduto = $conectar->prepare("INSERT INTO produto (nome_produto, status_produto, img_produto) VALUES (:nome_produto, :status_produto, :img_produto)");
        $inserirDadosProduto->bindValue("nome_produto", $nome_produto);
        $inserirDadosProduto->bindValue("status_produto", $status_produto);
        $inserirDadosProduto->bindValue("img_produto", $img_produto);
        $inserirDadosProduto->execute();
        
       
     
        //Verificando se o produto está presente no lote
        $getIdLote = $conectar->query("SELECT id_lote from lote where codigo_lote= '$codigo_lote'");
        $resultGetIdLote = $getIdLote->fetch(PDO::FETCH_ASSOC);

        $inserirNovoIdLote = $conectar->prepare("INSERT INTO lotes_produtos (id_lote) VALUES (:idUnicoLote)");//é necessário concluir essa parte
        $inserirNovoIdLote->bindValue('idUnicoLote', $resultGetIdLote['id_lote']);
        $inserirNovoIdLote->execute();
 echo "sdhfiiusfdhuih";
        //  header("Location: ../public/cadastro-produto/cadastrop.php?status=1");
        die();
    }
    


?>