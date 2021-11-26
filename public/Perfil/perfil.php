<?php 
    session_start();
    // print_r($_SESSION);
    
    if(!isset($_SESSION['nome_usuario'])){
        header('Location: ../login/login.php');
    }

    require ('../../logic/getUserProfiles.php');

    $username = $_SESSION['nome_usuario'];

    $profiles = getProfiles();

    // print_r($profiles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peril - <?php echo $username?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>

    <script src="./perfil.js" defer></script>

    <link rel="stylesheet" href="./perfil.css">
</head>
<body>
    <section id="topHelloContainer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="h1">Olá, <?php echo $username;?> </p>
                    <p class="h4">Bem vindo(a).</p> 
                    <div class="fs-6">Escolha um de seus perfis</div>
                </div>
            </div>
        </div>
    </section>

    

    <?php if(isset($_GET['statusCreate']) && $_GET['statusCreate'] == 0){?>
        <div class="alert alert-danger" role="alert">
            Prencha todos os dados ao criar uma empresa
        </div>
     <?php  } else if(isset($_GET['statusCreate']) && $_GET['statusCreate'] == 1) {?>

        <div class="alert alert-success" role="alert">
            Perfil e empresa criados com sucesso!
        </div>
    <?php }?>

    <section id="mainContent">
        <div class="container">
            <div class="row">
                <!-- Button trigger modal -->
                <div class="cretae-profile-div col-12 col-md-6 col-lg-3 col-xl-4">
                    <button type="button" class="btn btn-primary p-0" data-bs-toggle="modal" data-bs-target="#createProfile">
                        <div class="profile-card">
                            <p class="fs-3">
                                + Criar um novo perfil
                            </p>
                        </div>
                    </button>
                </div>
                
                <?php foreach ($profiles as $key => $value) { ?>
                    <div class="profile-div-form col-12 col-md-6 col-lg-3 col-xl-4">
                        <form action="../frente-caixa/index.php" method="POST">
                            <input type="hidden" hidden value="<?php echo $value['id_perfil'] ?>">
                            <button type="submit" class="btn btn-primary p-0 w-100">
                                <div class="profile-card">
                                    <p class="fs-3">
                                        <?php echo $value['nome_empresa'];?>
                                    </p>
                                </div>
                            </button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
       
    </section>

    <!-- Modal -->
    <div class="modal fade" id="createProfile" tabindex="-1" aria-labelledby="createProfileLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProfileLabel">Criar um novo perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="createProfileModalBody" class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button id="btnCreateComapny" class="nav-link btn active createComanyTogller" aria-current="page" href="#">Criar Empresa</button>
                    </li>
                    <li class="nav-item">
                        <button id="btnEnterComapany" class="nav-link btn btn-primary createComanyTogller" href="#">Entrar numa empresa</button>
                    </li>
                </ul>

                <section id="createCompany">
                    <form action="../../logic/createCompany.php" method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <label for="createCompanyName" class="form-label">Nome da empreasa</label>
                                    <input type="text" name="companyName" class="form-control" id="createCompanyName" placeholder="1234 Main St">
                                </div>
                                <div class="col-12">
                                    <label for="createCompanyCNPJ" class="form-label">CNPJ da empreasa</label>
                                    <input type="text" name="CNPJcompany" class="form-control" id="createCompanyCNPJ" placeholder="1234 Main St">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex p-3 justify-content-center">
                                    <button type="submit" class="btn btn-primary">Criar Empresa</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </section>

                <section id="enterCompany">
                    Inserir código da empresa
                </section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    
    
</body>
</html>