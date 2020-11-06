<?php

include_once "paginas/includes/header.php";

$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'home':
            include_once "paginas/inicial.php";
            break;
            case 'sony':
                include_once "paginas/sony/index.php";
                break;
                case 'pagi':
                    include_once "paginas/paginas.php";
                    break;
                    case 'pro':
                        include_once "paginas/projetos.php";
                        break;
                        case 'outros':
                            include_once "paginas/outros.php";
                            break;
        }
} else {
    include_once "paginas/inicial.php";
}
include_once  "paginas/includes/footer.php";