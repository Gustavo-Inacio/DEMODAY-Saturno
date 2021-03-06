
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sidebar/sidebar.css">
    <link rel="stylesheet" href="css/style-malca.css">
    
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../assets/images/favicon.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../assets/estilos.css">
    <title>Cadastro de produtos</title>
</head>
<style>
  footer {
    text-align: left;
    padding: 15px;
    color: rgb(9, 202, 228);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-left: 50px;
    margin-top: 20px;
  }
</style>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
  </header> 
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo">
                <i><img src="../assets/images/icon-sidebar.png" width="29px" alt=""></i>
                <span class="nav_logo-name">CRONOS</span>
            </a>
            <div class="nav_list">
                <a href="../frente-caixa/index.php" class="nav_link">
                    <i class="bi bi-wallet2"></i>
                    <span class="nav_name">Caixa</span>
                </a>
                <a href="../estoque/index.html" class="nav_link">
                    <i class="bi bi-archive"></i>
                    <span class="nav_name">Estoque</span>
                </a>
                <a href="#" class="nav_link active">
                    <i class="bi bi-qr-code"></i>
                    <span class="nav_name">Cadastro</span>
                </a>
                <a href="../relatorios/dashboard.html" class="nav_link">
                    <i class="bi bi-calendar-check"></i>
                    <span class="nav_name">Relat??rio</span>
                </a>
                <a href="../dashboard/dashboard.html" class="nav_link">
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
            </div>
        </div>
        <a href="#" class="nav_link">
            <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">Sair</span>
        </a>
    </nav>
  </div>
  
				
    <div class="container ficanocentroplz">
    <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom amanodesceai">
          <h1 class="h2 deixarbrancokk">Cadastro de Produtos</h1>
        </div>

        <form  method="post" action="../../logic/cadastro_produto.php">

        <?php if(isset($_GET['status']) && $_GET['status'] == 0){?>
						<div class="alert alert-danger" role="alert">
							Dados incorretos! Tente novamente
						</div>
            <?php } ?>
        <div class="row">
        <div class="form-group col-sm-11 col-md-6">
          <label for="nameProduct">Nome</label>
          <input name="nomeProduto" type="text" class="form-control" id="nameProduct">
        </div>

        <div class="form-group col-sm-12 col-md-6">
            <label for="precovProduct">Pre??o de venda</label>
            <input name="precoVenda" type="text" class="form-control" id="precovProduct">
        </div>
        </div>
  
        <div class="row">
        <div class="form-group col-sm-12 col-md-6">
          <label for="codProduct">C??digo de barras</label>
          <input name="codBar" type="text" class="form-control" id="codProduct">
        </div>

        <div class="form-group col-sm-12 col-md-6">
          <label for="precocProduct">Pre??o de compra</label>
          <input name="precoCompra" type="text" class="form-control" id="precocProduct">
        </div>
        </div>
  
        <div class="row">
        <div class="form-group col-sm-12 col-md-6">
          <label for="valProduct">Validade</label>
          <input name="validade" type="date" class="form-control" id="valProduct">
        </div>

        <div class="form-group col-sm-12 col-md-6">
          <label for="imageProduct">Imagem</label>
          <input name="imgProduto" type="file" class="form-control" id="imageProduct">
        </div>
        </div>
  
        <div class="row">
        <div class="form-group col-sm-12 col-md-6">
          <label for="quaProduct">Quantidade</label>
          <input name="quantidade" type="number" class="form-control" id="quaProduct">
        </div>

        <div class="form-group col-sm-12 col-md-6">
          <label for="loteProduct">Lote</label>
          <input name="lote" type="text" class="form-control" id="loteProduct">
        </div>
        </div>
       
        <br>
        
        <div class="ficanocentroai">
        <button class="btn btn-outline-dark bma1" type="button"><i class="bi bi-qr-code"></i> QR-Code</button>
        <button class="btn btn-outline-dark" type="submit">Cadastrar</button>
        <button class="btn btn-outline-dark bma2" type="button"><i class="bi bi-upc-scan"></i> C??digo</button>
        </div>

      </form>
      </main>
      </div>
      </div>

      <footer>
        <p>Equipe Saturno - Cronos.
          Todos os Direitos Reservados -  ?? Copyright 2021.</p>
      </footer>

      <script type="text/javascript" src="../sidebar/sidebar.js"></script>
</body>
</html>