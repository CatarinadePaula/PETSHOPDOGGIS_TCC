<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

<!-- Icones -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Cabeçalho -->
    <title> PETSHOP DOGGIS </title>
  </head>
  <body>

<

<!-- Inicio do container -->
<!-- Adiciona linhas e colunas / Cards -->
        <div class="modal-dialog text-center"> 
            <div class="col-sm-8 main-section">
                <div class="modal-content bg-primary">
                    <div class="card-body text-center log-img">
                        <img src="img/1.png" class="img-fluid">
                    </div>
                <form name="f_login" class="col-12" method="POST" action="valida.php">
                    <div class="form-group">
                     <b id="login-name">LOGIN:</b>
                        <input type="text" class="form-control" name="f_usuario" placeholder="Digite seu usuário" maxlength="7">
                    </div>
                    <div class="form-group">
                        <b id="senha-name">SENHA:</b>
                        <input type="password" class="form-control" name="f_senha" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-light"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                    <button type="reset" class="btn btn-light"><i class="fas fa-minus-circle"></i> Limpar</button>
                        
                    </form>
                    </div> 
            </div> </div> <!-- fim do container -->
      <p class="text-center text-danger">
            <?php if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p class="text-center text-success">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>


</body>
</html>