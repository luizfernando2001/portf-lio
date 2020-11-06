<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/bootstrap/css/site/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap/fonts/icomoon/icomoon.css">
    <link rel="stylesheet" href="public/bootstrap/css/site/parte10.css">

    <title>Document</title>
</head>

<body class="fundo">
    <header>
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="public/bootstrap/img/11.png" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/bootstrap/img/22.png" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="public/bootstrap/img/33.webp" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

    </div>

    <div class="container">
        <nav class="edvan navbar navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="index.php?pg=inicial"> <span class="luizhome"></span> Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?pg=sobre"><span class="luizquestion"></span> sobre  <span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span class="luiznotification"></span> Serviços</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="luizsearch-plus"></span> Mais
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="index.php?pg=produtos"> <span class="luizbooks"></span>Produtos</a>
                            <a class="dropdown-item" href="index.php?pg=contato"> <span class="luizusers"></span> Contato</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>


                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
            <li class="la nav-item dropdown">
                <a class=" luio nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class=" luizuser"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> <span class="luizsettings"></span> Meu Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> <span class="luizkey1"></span> Mudar senha</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class="luizinbox"></span> Meus Pedidos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class="luizexit"></span> Sair</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
        </nav>
        </header>
        <br>