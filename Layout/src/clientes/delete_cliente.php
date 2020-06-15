<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    $idCliente = mysqli_real_escape_string($conn, $_POST['COD_CLIENTE']);
    error_log("Deleta cliente $idCliente");


    

//deletar info
$delete_user= "DELETE FROM cadastro_clientes WHERE COD_CLIENTE = '$idCliente'";
$delete_user =  mysqli_query($conn, $delete_user);


error_log("DELETE FROM cadastro_clientes WHERE COD_CLIENTE = '$idCliente'");
//$return = json_encode($resultado);



header("Location: /bs4/Layout/src/clientes/Clientes.php");



?>