<!DOCTYPE html>
<html lang="pt-br">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">

<!-- Icones -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Cabeçalho -->
    <title> PETSHOP DOGGIS </title>
  </head>
  <body>

<!-- Inicio do container -->
    <div class="container">
        <div class="row mt-1 justify-content-center">
            <div class="col-sm-4 logo-main">
                <a class="navbar-brand" href="../index.html"><img src="../img/1.png" class="img-fluid"> </a> 
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-primary border border-dark rounded">

<!-- Ajusta ao tamanho da tela --> 
           <button class="navbar-toggler" type="button" data-toogle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>


<!-- barra de menu -->
            <div class="collapse navbar-collapse" id="navbarSite"> 
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="../servicos/Servicos.php"> Serviços </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="Produtos.php"> Produtos </a>
                </li>
                    <li class="nav-item">
                            <a class="nav-link mb-0 h5" href="../clientes/Clientes.php"> Clientes </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link mb-0 h5" href="../Pets.html"> Pets </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="../Veterinario.html"> Veterinarios </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="#"> Agendamento </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="#"> Pagamento </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="#"> Promoções </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="#"> Relatórios </a>
                     </li>
                        
                    </div>
                    
                    </li>
 
                </ul>
                    <form class="form-inline">
                        <button type="submit" class="btn btn-light" onclick="pop_up()"><i class="fas fa-user-circle"></i></button>
                        <button type="submit" class="btn btn-light" onclick="Nova()"><i class="fas fa-sign-out-alt"></i></button>

                        <script type="text/javascript">
                            function Nova()
                            {
                            location.href="Login.html"
                            }
                            </script>
                        <script>
                            function pop_up(){
                                
                            }

                        </script>

                    </form> </div>

        </nav>


                <div class="w-75 mx-auto ml-auto bg-light">  
<div class="row mx-md-n4">
    <div class="col py-3 px-md-3 border bg-light border-dark rounded">
        
        <form class="form-inline">
            <button type="submit" class="btn btn-light" onclick="NEW()"><i class="fas fa-file"></i> Novo</button>
            <button type="submit" class="btn btn-light" onclick="EDIT()"><i class="fas fa-edit"></i> Editar</button>
            <button type="submit" class="btn btn-light" onclick="SAVE()"><i class="fas fa-save"></i> Salvar</button>
            <button type="submit" class="btn btn-light" onclick="DELETE()"><i class="fas fa-trash-alt"></i> Excluir</button>
        </form>

        <script type="text/javascript">
                            console.log("AQUI");
                            function SAVE()
                            {
                                $("#form-cadastro").submit();
                                //location.href="clientes_Old.php"
                            }

                            function EDIT(){
                                $("#form-edit").submit();
                                
                            }

                            function NEW(){
                                document.location.reload(true);


                            }

                            function search() { 
                                
                                $("#form-pesquisa").submit();
                            }
                            function DELETE() {
                                $("#form-delete").submit();

                            }


                        </script>


    </div>
</div>
<div class="row mx-md-n4 rounded">
    <div class="col py-3 px-md-3 border-0 bg-light rounded">

        <!--PRESQUISA-->

    <p><b id="PesquisaCliente-name"> Pesquisa Cliente </b></p>
    <form method="POST" id="form-pesquisa" action="pesquisa_prod.php">
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise pelo ID do cliente">
        <input type = "button" name="enviar" onclick="search();" VALUE="pesquisar"> 
        </form>
<?php 
    if (isset($_GET["return"])) {
        $return = json_decode($_GET["return"], true);
    }
 ?>

    <!-- deleta cliente-->

     <form method="POST" id="form-delete" action="delete_prod.php">
    <input type="hidden" name=COD_PRODUTO value="<?= (isset($return['COD_PRODUTO'])) ? $return['COD_PRODUTO'] : ''; ?>" class="form-control">
    </form>

<!--CADASTRO -->

    <form method="POST" id="form-cadastro" action="cadastro_prod.php">

        <div class="form-group">
        <p><b id="CodProduto-name">Código do Produto</b></p>
        <input type="text" value="<?= (isset($return['COD_PRODUTO'])) ? $return['COD_PRODUTO'] : ''; ?>" name=COD_PRODUTO  class="form-control" readonly>
        </div>

        <div class="form-group">
        <p><b id="NomeProduto-name">Nome do Produto</b></p>
        <input type="text" value="<?= (isset($return['NOME_PRODUTO'])) ? $return['NOME_PRODUTO'] : ''; ?>" name=NOME_PRODUTO  class="form-control">
        </div>

</div>

    <div class="col py-3 px-md-3 border-0 bg-light rounded">

    <div class="form-group">
            <p><b id="FabricanteProduto-name">Fabricante</b></p>
            <input type="text" value="<?= (isset($return['FAB_PRODUTO'])) ? $return['FAB_PRODUTO'] : ''; ?>" name=FAB_PRODUTO class="form-control">
        </div>
    
    <div class="form-group">
            <p><b id="PrecoProduto-name">Preço</b></p>
            <input type="text" value="<?= (isset($return['PRECO_PRODUTO'])) ? $return['PRECO_PRODUTO'] : ''; ?>" name=PRECO_PRODUTO class="form-control">
        </div> 

    <div class="form-group">
            <p><b id="EspProduto-name">Especificações</b></p>
            <input type="text" value="<?= (isset($return['ESP_PRODUTO'])) ? $return['ESP_PRODUTO'] : ''; ?>" name=ESP_PRODUTO class="form-control">
        </div></div>

<div class="col py-3 px-md-3 border-0 bg-light rounded">

    <div class="form-group">
            <p><b id="QtdEstoque-name">Quantidade</b></p>
            <input type="text" value="<?= (isset($return['QTD_PRODUTO'])) ? $return['QTD_PRODUTO'] : ''; ?>" name=QTD_PRODUTO class="form-control">
        </div>

    <div class="form-group">
            <p><b id="PontosPataz-name">Pontos Pataz</b></p>
            <input type="text" value="<?= (isset($return['PATAZ_PRODUTO'])) ? $return['PATAZ_PRODUTO'] : ''; ?>" name=PATAZ_PRODUTO class="form-control">
        </div></div>
        
        </div>
        </form>
                </div>
        </form>


</div>

</div>
</div>
        </div> <!-- fim do container -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>