<!doctype html>
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
                        <a class="nav-link mb-0 h5" href="Servicos.php"> Serviços </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="../produtos/Produtos.php"> Produtos </a>
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

                    </form>

            </div>

        </nav>


                <div class="w-75 mx-auto ml-auto bg-light">  
<div class="row mx-md-n4">
    <div class="col py-3 px-md-3 border bg-light border-dark rounded">
        
        <form class="form-inline" name= "f_tool" method="POST" action="Servicos.php">
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
                                $("#form-cadastro").submit();
                                
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

        <!-- pesquisa-->

        <p><b id="PesquisaServ-name"> Pesquisa Serviços </b></p>
    <form method="POST" id="form-pesquisa" action="pesquisa_serv.php">
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise pelo ID do cliente">
        <input type = "button" name="enviar" onclick="search();" VALUE="pesquisar"> 
        </form>
<?php 
    if (isset($_GET["return"])) {
        $return = json_decode($_GET["return"], true);
    }
 ?>
    <!-- deleta cliente-->

     <form method="POST" id="form-delete" action="delete_serv.php">
    <input type="hidden" name=COD_SERVICO value="<?= (isset($return['COD_SERVICO'])) ? $return['COD_SERVICO'] : ''; ?>" class="form-control">
    </form>

    <!--CADASTRO-->

    <form method="POST" id="form-cadastro" action="cadastro_serv.php">

        <div class="form-group">
        <p><b id="CodigoServiço-name">Código do Serviço</b></p>
        <input type="text" name=COD_SERVICO value="<?= (isset($return['COD_SERVICO'])) ? $return['COD_SERVICO'] : ''; ?>" class="form-control"readonly>
    </div> 
        <div class="form-group">
            <p><b id="NomeServiço-name">Nome do Serviço</b></p>
            <input type="text" name=NOME_SERVICO value="<?= (isset($return['NOME_SERVICO'])) ? $return['NOME_SERVICO'] : ''; ?>" class="form-control">
        </div>

    </div>

    <div class="col py-3 px-md-3 border-0 bg-light rounded">
        
            <div class="form-group">
                <p><b id="TempoEstimado-name">Tempo Estimado</b></p>
                <input type="text" name=TEMPO_SERVICO value="<?= (isset($return['TEMPO_SERVICO'])) ? $return['TEMPO_SERVICO'] : ''; ?>" class="form-control">
        </div>
            <div class="form-group">
                <p><b id="Responsavel-name">Responsável</b></p>
                <input type="text" name=RESP_SERVICO value="<?= (isset($return['RESP_SERVICO'])) ? $return['RESP_SERVICO'] : ''; ?>" class="form-control">
            </div>
            <div class="form-group">
                <p><b id="PontosPataz-name">Pontos Pataz</b></p>
                <input type="text" name=PATAZ_SERVICO value="<?= (isset($return['PATAZ_SERVICO'])) ? $return['PATAZ_SERVICO'] : ''; ?>" class="form-control">
            </div>
    
        </div>

    <div class="col py-3 px-md-3 border-0 bg-light rounded">
            <div class="form-group">
                <p><b id="PrecoServico-name">Preço</b></p>
                <input type="text" name=PRECO_SERVICO name=PRECO_SERVICO value="<?= (isset($return['PRECO_SERVICO'])) ? $return['PRECO_SERVICO'] : ''; ?>"  class="form-control">
        </div>
            <div class="form-group">
                <p><b id="ProdutosUsados-name">Produtos Usados</b></p>
                <input type="text" name=PROD_SERVICO value="<?= (isset($return['PROD_SERVICO'])) ? $return['PROD_SERVICO'] : ''; ?>" class="form-control">
            </div>   

            </div>
    </form>

    <div class="col py-3 px-md-3 border border-dark bg-light rounded-right border-left">

            <div class="form-group">
                <p><b id="HistoricoPreco-name">Histórico de Preços</b></p>

            <input type="text" value="<?= (isset($return['PRECO_SERVICO'])) ? $return['PRECO_SERVICO' ].' ADMIN01' : ''; ?>"class="form-control" readonly>
        </div>
            <div class="form-group">
                <p><b id="HistoricoCompra-name">Histórico de Compras</b></p>
                <input type="text" class="form-control" readonly>
            </div>
                </div>


            
</div>

</div>

        </div> <!-- fim do container -->

<p class="text-center text-danger">
            <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p class="text-center text-success">



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>