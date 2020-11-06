<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="parte3.css">
    <link rel="stylesheet" href="parte3.js">
    <title>Document</title>
</head>

<body>
    <div class="container py-4">

        <div class="edvan row py-3 ">
            <div class="col-4  text-center">
                <img src="public/bootstrap/img/comm.webp" alt="" class="rounded">

            </div>
            <div class="col-8">
                <h2 class="te text-center">LUIZ SHOP</h2>
                <h2 class="li">Finalizar compra</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas nobis, necessitatibus libero, rem iste voluptatum optio consectetur animi quod neque explicabo qui distinctio suscipit. Natus possimus dolorum asperiores architecto reprehenderit.</p>
                <div class="row">
                    <div class="col-4">
                        <form>
                            <div class="form-group ">
                                <label for="inputState">Tamanho</label>
                                <select id="inputState" class="form-control">
                                  
                                  <option>PP</option>
                                  <option>P</option>
                                  <option>M</option>
                                  <option>G</option>
                                  <option>GG</option>
                                </select>
                              </div>
                            </form>
                    </div>
                </div>


                </nav>

                <div class="row">

                    <div class="col-6 "></div>
                    <div class="col-2 ">
                        <h5>VALOR
                        </h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 "></div>
                    <div class="OO col-2 ">
                        <h5> RS:95,55
                        </h5>
                    </div>
                </div>




                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        Comprar
                      </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Compra confirmada</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                </div>
                                <div class="modal-body">
                                    Código da compra 6464-6468489-4648, Obrigado pela compra.
                                </div>
                                <div class="modal-footer">
                                    <a href="site.php?pg=inicial" class="btn btn-primary">Voltar</a>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar mudanças</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>






            </div>







        </div>






        <script src="public/bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="parte3.js"></script>
        <script src="public/bootstrap/js/bootstrap.js"></script>

    </div> 