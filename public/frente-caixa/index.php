<?php
    print_r($_POST);


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../sidebar/sidebar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--Side Bar-->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png" />
    <link rel="stylesheet" href="../assets/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <style>
        body {
            position: relative;
            overflow: auto;
        }

        .color {
            background-image: linear-gradient(360deg, #284066, #64227a);
            border-radius: 10px;
        }

        .amanodesceai {
            margin-top: 35px !important;
        }

        a {
            text-decoration: none !important;
        }
        footer {
            text-align: left;
             padding: 5px;
             color: rgb(9, 202, 228);
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-left: 0px;
            margin-top: 15px;
}
    </style>
    <title>Frente do Caixa</title>
</head>

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
                    <a href="#" class="nav_link active">
                        <i class="bi bi-wallet2"></i>
                        <span class="nav_name">Caixa</span>
                    </a>
                    <a href="../estoque/index.html" class="nav_link">
                        <i class="bi bi-archive"></i>
                        <span class="nav_name">Estoque</span>
                    </a>
                    <a href="../cadastro-produto/cadastrop.php" class="nav_link">
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
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
    <div class="container-fluid">
        <main class="col-md-9 ms-sm-auto col-lg-12 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom amanodesceai">
                <h1 class="text-light h2">Frente de Caixa</h1>
        </div>
        <div class="row text-center">
            <div class="CodBar col-xl-2 col-lg-12 col-md-12 col-sm-12">
                <button class="btn btn-primary btn-lg" type="button">Escanear Produto<br><img
                        src="../assets/images/barcode.png"></button>
            </div>
            <div class="col-xl-10 col-md-12 col-sm-12 table-responsive">
                <table class="table rounded color text-white">
                    <thead>
                        <tr>
                            <th>C??digo</th>
                            <th>Nome</th>
                            <th>Quantidade</th>
                            <th>Desconto</th>
                            <th>Pre??o</th>
                            <th>Imagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>156148918516</td>
                            <td>Garrafa de ??gua</td>
                            <td>2</td>
                            <td>R$4,60</td>
                            <td>R$0,00</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive mt-5">
                <table class="table table-striped table-dark">
                    <thead class="table-dark">
                        <tr class="text-white">
                            <th>C??digo</th>
                            <th>Quant.</th>
                            <th>Nome</th>
                            <th>Pre??o</th>
                            <th>Desconto</th>
                            <th>Total</th>
                            <th>Hor??rio</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>156148918516</td>
                            <td>2</td>
                            <td>Garrafa de ??gua</td>
                            <td>R$2,30</td>
                            <td>R$0,00</td>
                            <td>R$4,60</td>
                            <td>18:14 </td>
                            <td class="text-danger">Devolu????o</td>
                        </tr>
                        <tr>
                            <td>20151850000</td>
                            <td>1</td>
                            <td>Ch?? de Sach??</td>
                            <td>R$10,00</td>
                            <td>R$1,00</td>
                            <td>R$9,00</td>
                            <td>17:37</td>
                            <td class="text-success">Venda Realizada</td>
                        </tr>
                        <tr>
                            <td>50000202126</td>
                            <td>1</td>
                            <td>Biscoito Recheado</td>
                            <td>R$5,00</td>
                            <td>R$0,00</td>
                            <td>R$5,00</td>
                            <td>13:44</td>
                            <td class="text-success">Venda Realizada</td>
                        </tr>
                        <tr>
                            <td>05420202100</td>
                            <td>1</td>
                            <td>Refrigerante de Cola</td>
                            <td>R$4,27</td>
                            <td>R$0,27</td>
                            <td>R$4,00</td>
                            <td>12:00</td>
                            <td class="text-warning">An??lise</td>
                        </tr>
                        <tr>
                            <td>04867414400</td>
                            <td>1</td>
                            <td>Sal Refinado</td>
                            <td>R$4,67</td>
                            <td>R$0,27</td>
                            <td>R$4,20</td>
                            <td>10:34</td>
                            <td class="text-success">Venda Realizada</td>
                        </tr>
                        <tr>
                            <td>05320502187</td>
                            <td>1</td>
                            <td>Suco de Laranja</td>
                            <td>R$4,00</td>
                            <td>R$0,00</td>
                            <td>R$4,00</td>
                            <td>11:58</td>
                            <td class="text-success">Venda Realizada</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card border-dark text-center text-white col-xl-3 col-lg-12 col-md-12 col-sm-12 mt-4 color">
                <div class="card-header">
                    <h4>Total: R$9999,99</h4>
                </div>
                <div class="card-body text-white align-middle">
                    <h6 class="card-title">M??todo de Pagamento</h6>
                    <p><button type="button" class="btn btn-info col-lg-12">Cart??o de D??bito</button>
                    </p>
                    <p><button type="button" class="btn btn-dark col-lg-12">Cart??o de Cr??dito</button>
                    </p>
                    <p><button type="button" class="btn btn-success col-lg-12">Dinheiro</button></p>
                    <p><button type="button" class="btn btn-danger btn-lg col-lg-12">Cancelar</button></p>
                </div>
            </div>
        </div>
        <!-- Total e Bot??o cancelar 
            <div class="text-center row mt-1">
            <div class="col-lg-6 col-md-12 col-sm-12 card bg-dark">
                <div class="card-body align-middle text-center color">
                    <h2 class="text-white rounded">Total: R$500,90</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-1">
                <button type="button" class="btn btn-danger btn-lg">Cancelar</button>
            </div>
        </div> -->

        <footer>
            <p>Equipe Saturno - Cronos.
         Todos os Direitos Reservados -  ?? Copyright 2021.</p>
            </footer>

        <script type='text/javascript' src='http://code.jquery.com/jquery-1.6.4.js'></script>
        <script>
            $('.codBar').ready(function () {
                var barcode = "";
                $('.codBar').keydown(function (e) {

                    var code = (e.keyCode ? e.keyCode : e.which);
                    if (code == 13)// Enter key hit
                    {
                        alert(barcode);
                    }
                    else if (code == 9)// Tab key hit
                    {
                        alert(barcode);
                    }
                    else {
                        barcode = barcode + String.fromCharCode(code);
                    }
                });

            });
        </script>

        <script type="text/javascript" src="../sidebar/sidebar.js"></script>
    </main>
    </div>
</body>

</html>