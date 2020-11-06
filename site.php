<?php

//topo
include_once "paginas/site/includes/header.php";



//conteudo inicial

$paginas = isset($_GET['pg']);

if ($paginas) {
    
   switch ($_GET['pg']) {
       case 'inicial':
        include_once "paginas/site/inicial.php";
           break;

           case 'sobre':
            include_once "paginas/site/sobre.php";
               break;

               case 'produtos':
                include_once "paginas/site/produtos.php";
                   break;

                   case 'contato':
                    include_once "paginas/site/contato.php";
                       break;
                       
                       case 'comprar':
                        include_once "paginas/site/comprar.php";
                           break;    

                       
       default:
           # code...
           break;
   }
  } 
  else { include_once "paginas/site/inicial.php";}

//rodape
include_once "paginas/site/includes/footer.php";
