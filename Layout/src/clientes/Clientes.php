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
                        <a class="nav-link mb-0 h5" href="../produtos/Produtos.php"> Produtos </a>
                </li>
                    <li class="nav-item">
                            <a class="nav-link mb-0 h5" href="Clientes.php"> Clientes </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link mb-0 h5" href="../Pets.html"> Pets </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 h5" href="../Veterinario.html"> Veterinario </a>
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
        
        <form class="form-inline" name= "f_tool" method="POST" action="Clientes.php" >
            <button type="reset" class="btn btn-light" onclick="NEW()"><i class="fas fa-file"></i> Novo</button>
            <button type="submit" class="btn btn-light" onclick="EDIT()"><i class="fas fa-edit"></i> Editar</button>
            <button type="button" class="btn btn-light" onclick="SAVE()"><i class="fas fa-save"></i> Salvar</button> <!--GRAVAR-->
            <button type="submit" class="btn btn-light" onclick="DELETE()"><i class="fas fa-trash-alt"></i> Excluir</button>
        </form>



                        <script type="text/javascript">
                            console.log("AQUI");
                            function SAVE()
                            {
                                $("#form-cadastro").submit();
                                
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

       <!-- <script type="text/javascript" src="javascriptpersonalizado.js"></script>
        -->
        <p><b id="PesquisaCliente-name"> Pesquisa Cliente </b></p>
        <form method="POST" id="form-pesquisa" action="pesquisa_cliente.php">
            Informação Cliente: <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise pelo ID do cliente">
            <input type = "button" name="enviar" onclick="search();" VALUE="pesquisar"> 
        </form>
        
<?php 
    if (isset($_GET["return"])) {
        $return = json_decode($_GET["return"], true);
    }
 ?>
 <!--edita cliente -->
 <form method="POST" id="form-edit" action="edit_cliente.php">
    <input type="hidden" name=COD_CLIENTE value="<?= (isset($return['COD_CLIENTE'])) ? $return['COD_CLIENTE'] : ''; ?>" class="form-control">
    </form>

<!-- deleta cliente-->

 <form method="POST" id="form-delete" action="delete_cliente.php">
    <input type="hidden" name=COD_CLIENTE value="<?= (isset($return['COD_CLIENTE'])) ? $return['COD_CLIENTE'] : ''; ?>" class="form-control">
    </form>
    
    <!--fim deletar-->

    <!--cadastro-->
 

    <form method="POST" id="form-cadastro" action="cadastro.php">
        <div class="form-group">
        <p><b id="CodigoCliente-name">Código do Cliente</b></p>
        <input type="text" value="<?= (isset($return['END_CLIENTE'])) ? $return['COD_CLIENTE'] : ''; ?>" name=COD_CLIENTE class="form-control" readonly>
        </div>
        <div class="form-group">
            <p><b id="RGCliente-name">RG</b></p>
            <input type="text" value="<?= (isset($return['RG_CLIENTE'])) ? $return['RG_CLIENTE'] : ''; ?>" name=RG_CLIENTE class="form-control">
        </div>
        <div class="form-group">
            <p><b id="CPFCliente-name">CPF</b></p>
            <input type="text" value="<?= (isset($return['CPF_CLIENTE'])) ? $return['CPF_CLIENTE'] : ''; ?>" name=CPF_CLIENTE class="form-control">
        </div>
        <div class="form-group">
            <p><b id="TotalFidelidadePatazCliente-name">Total Fidelidade Pataz</b></p>
            <input type="text" value="<?= (isset($return['TOTALPATAZ_CLIENTE'])) ? $return['TOTALPATAZ_CLIENTE'] : ''; ?>" name=TOTALPATAZ_CLIENTE class="form-control">
        </div>
    
        </div>

    <div class="col py-3 px-md-3 border-0 bg-light rounded">
            <div class="form-group">
                <p><b id="NomeCliente-name">Nome do Cliente</b></p>
                <input type="text" value="<?= (isset($return['NOME_CLIENTE'])) ? $return['NOME_CLIENTE'] : ''; ?>" name=NOME_CLIENTE class="form-control">
        </div>
            <div class="form-group">
                <p><b id="EnderecoCliente-name">Endereço</b></p>
                <input type="text" value="<?= (isset($return['END_CLIENTE'])) ? $return['END_CLIENTE'] : ''; ?>" name=END_CLIENTE class="form-control">
            </div>
            <div class="form-group">
                <p><b id="EmailCliente-name">Email</b></p>
                <input type="text" value="<?= (isset($return['EMAIL_CLIENTE'])) ? $return['EMAIL_CLIENTE'] : ''; ?>" name=EMAIL_CLIENTE class="form-control">
            </div>
 
    
        </div>
    </form>

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