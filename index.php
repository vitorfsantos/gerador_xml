<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador xlm</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
        @media (max-width: 600px) {
            .div_responsive { 
                display: flex;
                flex-direction: column;
             }
        }

     
    </style>
</head>
  <body>
    
    <header class="navbar navbar-expand-lg bg-body-tertiary">
        <nav class="container-fluid">
            <a class="navbar-brand" href="index.php">Gerador XML PF e PJ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="?page=novo_pf">Pessoa Física</a>
                    <a class="nav-link" href="?page=novo_pj">Pessoa Jurídica</a>
                </div>
            </div>
        </nav>
    </header>
    

    <div class="container">
            <div class="col mt-5">
            <?php
            
                //seleciona a pagina a exibir
            switch(@$_REQUEST["page"]){
                //PF
                case "novo_pf":
                    include("pf/criar_pf.php");
                break;
                case "listar_pf":
                    include("pf/listar_pf.php");
                break;
                //PJ
                case "novo_pj":
                    include("pj/criar_pj.php");
                break;
                case "listar_pj":
                    include("pj/listar_pj.php");
                break;
                //PADRÃO
                default:
                    print "Bem vindo! </br>
                           Selecione no Menu o que deseja gerar.";
            }
              ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>