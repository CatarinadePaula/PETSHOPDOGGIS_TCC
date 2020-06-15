<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    $idServ = mysqli_real_escape_string($conn, $_POST['COD_SERVICO']);
    error_log("Deleta cliente $idServ");


    


//deletar info
$delete_user= "DELETE FROM cadastro_servicos WHERE COD_SERVICO = '$idServ'";
$delete_user =  mysqli_query($conn, $delete_user);


error_log("DELETE FROM cadastro_servicos WHERE COD_SERVICO = '$idServ'");
//$return = json_encode($resultado);


//header("Location: /bs4/Layout/src/servicos/Servicos.php");



?>