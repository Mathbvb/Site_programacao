<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootnavbar.css">
    <link rel="stylesheet" href="./estilo.css">
    <link rel="stylesheet" href="./estilo2.css">
    <link rel="sortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://dbreskovit.github.io/000Webhost/remove-water-mark.css">
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-sm navbar-dark navcor fixed-top">
                    <div class="container">
                        <a href="?pagina=home" class="navbar-brand">Sobre o site</a>
                        <a class="navbar-brand" href="?pagina=sobremim">Sobre mim</a>
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="navbarmenu">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Exercícios basicos
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?pagina=atividade1/a1q1">Exercício 1</a>
                                    <a class="dropdown-item" href="?pagina=atividade1/a1q2">Exercício 2</a>
                                    <a class="dropdown-item" href="?pagina=atividade1/a1q3">Exercício 3</a>
                                    <a class="dropdown-item" href="?pagina=atividade1/a1q4">Exercício 4</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    If Else
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?pagina=atividade2/a2q1">Exercício 1</a>
                                    <a class="dropdown-item" href="?pagina=atividade2/a2q2">Exercício 2</a>
                                    <a class="dropdown-item" href="?pagina=atividade2/a2q3">Exercício 3</a>
                                    <a class="dropdown-item" href="?pagina=atividade2/a2q4">Exercício 4</a>
                                    <a class="dropdown-item" href="?pagina=atividade2/a2q5">Exercício 5</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" heidirole="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Estruturas de repetição
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q1">Exercício 1</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q2">Exercício 2</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q3">Exercício 3</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q4">Exercício 4</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q5">Exercício 5</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q6">Exercício 6</a>
                                    <a class="dropdown-item" href="?pagina=atividade3/a3q7">Exercício 7</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Arrays
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="?pagina=atividade4/a4q1">Exercício 1</a>
                                    <a class="dropdown-item" href="?pagina=atividade4/a4q2">Exercício 2</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sistema
                                        </a>
                                            <div class='dropdown-menu dropdown-menu-dark' aria-labelledby='navbarDropdown'>
                                            <?php
                                                if (isset($_SESSION['user'])){
                                                echo "<a class='dropdown-item' href='?pagina=cadcliente'>Cadastrar cliente</a>
                                                <a class='dropdown-item' href='?pagina=listar'>Listar clientes</a>
                                                <a class='dropdown-item' href='?pagina=logout'>Logout(".$_SESSION['user'].")</a>";
                                                }
                                                else{
                                                echo "<a class='dropdown-item' href='?pagina=login'>Login</a>
                                                <a class='dropdown-item' href='?pagina=caduser'>Criar conta</a>";
                                                }
                                           ?>
                                </li>
                            </ul></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </header>

        <?php    
            if(isset($_GET["pagina"])){   
            $pagina = $_GET["pagina"];    
                if(file_exists($pagina.".php")){
                    include ($pagina.".php");
                    }else{
                    include ("not_found.php");
                    }

            }else{
            include("home.php");
            }     
        ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <p>Mathias Recktenvald 2021 &copy - Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar/js/bootnavbar.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>